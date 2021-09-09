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

        config(["database.connections.{$connection}.database" => null]);

        DB::connection($connection)->statement("CREATE DATABASE IF NOT EXISTS {$schema}");

        $this->info("Database {$schema} has succesfully been created.");

        return Command::SUCCESS;
    }
}
