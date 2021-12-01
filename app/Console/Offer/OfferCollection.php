<?php

namespace App\Console\Offer;
use App\Console\Offer\Interfaces\ReaderInterface;
use App\Console\Offer\Interfaces\OfferCollectionInterface;
use Illuminate\Support\Collection;
use App\Console\Offer\Interfaces\OfferInterface;

Class OfferCollection  implements OfferCollectionInterface {

    /**
     * Data
     *
     * @var Collection
     */
    public  $Data;
    public function __construct($Data=[]){
        $this->Data= collect($Data);
    }
    
    public function get(int $index): OfferInterface
    {
        $data=[];
        return new Offer($this->Data[$index]);
    }
    public function getIterator(): Collection
    {
        // $data = collect($data)->whereBetween('price', [100, 500])->all();
        return $this->Data;
    }
    public function countByVendorID($vendorId): int
    {
        
        return $this->Data->where('vendorId',$vendorId)->count();
    }
}
