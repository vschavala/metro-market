<?php

namespace App\Console\Offer\Interfaces;

use Illuminate\Support\Collection;

/**
 * Interface for The Collection class that contains Offers
 */
interface OfferCollectionInterface {
 public function get(int $index): OfferInterface;
 public function getIterator(): Collection;
 public function countByVendorID($vendorId):int;
}