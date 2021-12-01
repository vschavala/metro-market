<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;

use App\Console\Offer\JsonReader;

class count_by_vendor_id extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count_by_vendor_id {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count by vendor';

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
        $id = $this->argument('id');
        $reader = new JsonReader;
        $path = storage_path() . "/json/vendor.json"; 
        $jsondata = $reader->read($path);
        $this->line('count.vendor_id');
        $this->line($jsondata->countByVendorID($id));
        //dd($jsondata);
    }
}
