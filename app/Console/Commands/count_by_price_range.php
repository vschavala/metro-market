<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Console\Offer\JsonReader;

class count_by_price_range extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count_by_price_range {price_from} {price_to}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'counting the price of vendor';

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
       
        $reader = new JsonReader;
        $path = storage_path() . "/json/vendor.json"; 
        $jsondata = $reader->read($path);

        dd($jsondata);

        // $request = Request::create('/price_range', 'GET');
        // $this->info(app()->make(\Illuminate\Contracts\Http\Kernel::class)->handle($request));
    }
}
