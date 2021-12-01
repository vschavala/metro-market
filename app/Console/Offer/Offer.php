<?php

namespace App\Console\Offer;
use App\Console\Offer\Interfaces\OfferInterface;

Class Offer implements OfferInterface {

 /**
     * Data
     *
     * @var Collection
     */
    public  $Data;
    public function __construct($Data=[]){
        $this->Data= collect($Data);
    }

   
}
