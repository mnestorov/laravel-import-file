<?php

namespace App\Services;

use App\Jobs\ImportFileJob;
use App\Mappings\RecordTypeMapping;
use App\Models\FileImport;
use App\Models\RecordType;
use App\Repositories\ImportedRecordRepositoryInterface;
use Illuminate\Support\Facades\Log;

class FileImportService
{
    // Declare the ImportedRecordRepository instance variable
    protected $importedRecordRepository;

    public function __construct(ImportedRecordRepositoryInterface $importedRecordRepository)
    {
        $this->importedRecordRepository = $importedRecordRepository;
    }

    /**
     * Import the file data into the database.
     *
     * @param $pathToFile
     * @param $fileId
     * @return void
     * @throws \Exception
     */
    public function import($pathToFile, $fileId)
    {
        // Create a new RecordTypeMapping instance and get the mapping
        $recordTypeMapping = new RecordTypeMapping();
        $importFileSpecs = $recordTypeMapping->getMapping();

        // Check if the file exists, otherwise throw an exception
        if (!file_exists($pathToFile)) {
            throw new \Exception('File not found: ' . $pathToFile);
        }

        // Open the file and find or create the FileImport record
        $file = fopen($pathToFile, 'r');
        $fileImport = FileImport::firstOrCreate(['id' => $fileId]);

        // Loop through each line in the file and import the data
        $lineNumber = 0;
        while (!feof($file)) {
            $line = fgets($file);
            $lineNumber++;
            if ($line) {
                Log::info('Fetched line', ['lineNumber' => $lineNumber, 'line' => $line]);
                $recordTypeStr = substr($line, 17, 2);
                if (array_key_exists($recordTypeStr, $importFileSpecs)) {
                    $columns = $importFileSpecs[$recordTypeStr];
                    $data = $this->parseLine($line, $columns);
                    Log::info('Parsed line', ['lineNumber' => $lineNumber, 'data' => $data]);
                    $recordType = RecordType::firstOrCreate(['type' => $recordTypeStr]);

                    $this->importedRecordRepository->updateOrCreate(
                        [
                            'file_import_id' => $fileImport->id,
                            'record_type_id' => $recordType->id,
                            'data' => json_encode($data)
                        ],
                        ['data' => json_encode($data)]
                    );
                    Log::info('Saved record', ['file_import_id' => $fileImport->id, 'record_type_id' => $recordType->id, 'data' => json_encode($data)]);
                }
            }
        }

        // Close the file and log the import process
        fclose($file);
        Log::info('Importing data', ['path' => $pathToFile, 'id' => $fileId]);
    }

    /**
     * @param $pathToFile
     * @param $fileId
     * @return void
     */
    public function queueImport($pathToFile, $fileId)
    {
        ImportFileJob::dispatch($pathToFile, $fileId);
        Log::info('Queuing file import job', ['path' => $pathToFile, 'id' => $fileId]);
    }

    /**
     * Parse a line of the file based on the given column specifications.
     *
     * @param $line
     * @param $columns
     * @return array
     */
    private function parseLine($line, $columns)
    {
        $data = [];

        // Extract data from each column
        foreach ($columns as $column) {
            $start = $column['start_range'];
            $length = $column['length'];
            $description = $column['description'];
            $data[$description] = trim(substr($line, $start, $length));
        }

        return $data;
    }
}
