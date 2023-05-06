<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Import File with Artisan Command

This is a test project to import file with artisan command.

## Task Definition

Using Laravel create an Artisan command called `import_file` that accepts two arguments - `path_to_file` and `id`. 
The command should parse the attached file `PAYARC_DDF` that has a fixed width text format and import the data into a mysql database. 
On each line of the file there is a Record, that has two symbol unique Record Type which starts from position 18, for example: "DT", "P1", "P2", etc. 
Each individual Record Type has its own fixed width scheme that determines the Start and End of each column. 
You can find the full scheme specification in the attached file `import_file_specs.csv`. 
The `id` parameter of the command uniquely identifies a file. Any consecutive import of a file with the same id should not result in duplicating the Records that have already been imported.

## How To Run

- Clone the repository to your local machine and navigate to the project's root directory in a terminal.

- Copy the `.env.example` file and name it `.env`.

- Update the `.env` file with the appropriate database credentials and settings.

- Run `composer install` to install all the required dependencies.

- Generate an application key by running `php artisan key:generate`.

- Run database migrations by running `php artisan migrate`.

- Run database seeds by running `php artisan db:seed`.

- Run the Laravel server by running `php artisan serve`.

- To import a file, run `php artisan import_file /path/to/file file_id`. Replace `/path/to/file` with the actual path to the file you want to import and `file_id` with an integer value that uniquely identifies the file you're importing.

- To check if there are any pending jobs in the queue, run `php artisan queue:work`. This will start a worker process that will listen for jobs and execute them as they come in.

**Note:** Make sure you have a running Redis or database queue driver configured to process queued jobs. You can check your queue driver settings in the `.env` file.
