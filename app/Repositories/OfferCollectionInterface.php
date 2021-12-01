<?php

namespace App\Repository;

/**
 * Interface for The Collection class that contains Offers
 */
interface OfferCollectionInterface {
 public function get(int $index): OfferInterface;
 public function getIterator(): Iterator;
}