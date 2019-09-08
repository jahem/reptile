<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class banmaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banma:update';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $re = file_get_contents("https://m.allwin368.com/Index/ajaxbanner?null=yes");
        \Log::info($re);
        $re = file_get_contents("https://m.allwin368.com/Active3/loginActive");
        \Log::info($re);
        \Log::info("斑马访问成功");
    }
}
