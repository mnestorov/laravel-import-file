<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\FileImportService;
use Illuminate\Support\Facades\Log;

class ImportFileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Declare instance variables to store the path to the file and the file ID
    protected $pathToFile;
    protected $fileId;

    public function __construct($pathToFile, $fileId)
    {
        $this->pathToFile = $pathToFile;
        $this->fileId = $fileId;
    }

    /**
     * Handle the import job by calling the import method on the FileImportService instance.
     *
     * @param FileImportService $fileImportService
     * @return void
     * @throws \Exception
     */
    public function handle(FileImportService $fileImportService)
    {
        $fileImportService->import($this->pathToFile, $this->fileId);
        // Log the importing process
        Log::info('Importing file', ['path' => $this->pathToFile, 'id' => $this->fileId]);
    }
}
