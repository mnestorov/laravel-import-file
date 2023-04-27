<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FileImportService;

class ImportFile extends Command
{
    // Define the command signature and description
    protected $signature = 'import_file {path_to_file} {id}';
    protected $description = 'Import data from a file with a fixed-width format into a MySQL database';

    // Declare the FileImportService instance variable
    protected $fileImportService;

    public function __construct(FileImportService $fileImportService)
    {
        parent::__construct();
        $this->fileImportService = $fileImportService;
    }

    /**
     * Handle the execution of the command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the command arguments
        $pathToFile = $this->argument('path_to_file');
        $fileId = $this->argument('id');

        try {
            $this->fileImportService->queueImport($pathToFile, $fileId);
            // If successful
            $this->info('File import job has been queued');
            return 0;
        } catch (\Exception $e) {
            // If an exception occurs
            $this->error($e->getMessage());
            return 1;
        }
    }
}
