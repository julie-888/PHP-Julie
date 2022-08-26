<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Exceptions\JulieException;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:lesson:3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        throw new JulieException();
        print "Hello console";
    }
}
