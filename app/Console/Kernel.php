<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    //http://packalyst.com/packages/package/digitaldream/laracrud

    protected $commands = [
        \LaraCrud\Console\Request::class,
        \LaraCrud\Console\Model::class,
        \LaraCrud\Console\Controller::class,
        \LaraCrud\Console\Route::class,
        \LaraCrud\Console\View::class,
        \LaraCrud\Console\Mvc::class
    ];


    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
