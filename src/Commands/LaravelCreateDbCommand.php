<?php

namespace ArondeParon\LaravelCreateDb\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LaravelCreateDbCommand extends Command
{
    public $signature = 'migrate:create-db {schema?} {--connection=}';

    public $description = 'Create a new database schema';

    public function handle()
    {
        $schema = $this->argument('schema') ?? $this->ask('What is the name of your database schema?');
        $connection = $this->option('connection') ?? DB::getDefaultConnection();

        $databaseExists = DB::connection($connection)->select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '{$schema}'");

        if (! empty($databaseExists)) {
            $this->error("Database {$schema} already exists.");

            return Command::FAILURE;
        }

        DB::connection($connection)->statement("CREATE DATABASE {$schema}");

        $this->info("Database {$schema} has succesfully been created.");

        return Command::SUCCESS;
    }
}
