<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command shows the Database name being used';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->info("Current Database is : ".DB::connection()->getDatabaseName());

    }
}
