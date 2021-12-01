<?php

namespace App\Console\Offer;
use App\Console\Offer\Interfaces\ReaderInterface;
use App\Console\Offer\Interfaces\OfferCollectionInterface;

Class JsonReader implements ReaderInterface {


    public function read(string $path):OfferCollectionInterface{
        $json = json_decode(file_get_contents($path), true);
        $var = new OfferCollection($json);
        return $var;

    }
}
