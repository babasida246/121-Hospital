<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Initial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'initial';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:refresh');
        Artisan::call('key:generate');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('queue:clear');
        Artisan::call('optimize:clear');
        Artisan::call('event:clear');
        Artisan::call('view:clear');
        return 0;
    }
}
