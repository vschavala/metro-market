<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositor\IteratorInterface;

class VendorController extends Controller
{
    public function __construct()
    {

    }

    public function countByPriceRange(){
        $path = storage_path() . "/json/vendor.json"; 

        $json = json_decode(file_get_contents($path), true);
        $data = array_filter($json);

        $data = collect($data)->whereBetween('price', [100, 500])->all();
        return $data;
    }

    public function countByVendorId(){
        $path = storage_path() . "/json/vendor.json"; 

        $json = json_decode(file_get_contents($path), true);
        $data = array_filter($json);

        $data = collect($data)->whereBetween('price', [100, 500])->all();
        return $data;
    }
}
