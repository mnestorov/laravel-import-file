<?php

namespace App\Providers;

use App\Repositories\EloquentImportedRecordRepository;
use App\Repositories\ImportedRecordRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ImportedRecordRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImportedRecordRepositoryInterface::class, EloquentImportedRecordRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
