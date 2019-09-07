<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

class grasp extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grasp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抓取数据';
    protected $url = 'http://177e.tt56w.com:8000/玄幻小说/2009/凡人修仙传/凡人修仙传%s.mp3?%s';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        //
//        for ($index = 1; $index < 2000; $index++) {
            $apiUrl = "https://www.ysx8.net/play/flw.asp?url=玄幻小说/2009/凡人修仙传/凡人修仙传40.mp3&jiidx=/play_1836_49_1_41.html&jiids=/play_1836_49_1_39.html&id=1836&ji=40&said=49";
            $client = new Client();
//            sleep(30);
            $res = $client->request('GET', $apiUrl);
            if ($res->getStatusCode() == 200) {
                \Log::info($res->getBody()->getContents());
            } else {
                echo "服务器错误";
                die;
            }
        }
//    }

}
