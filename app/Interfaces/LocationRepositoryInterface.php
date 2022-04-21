<?php

namespace App\Interfaces;

interface LocationRepositoryInterface
{
    public function getLocations($zip);
    public function getLocationsNear($lon,$lat);
    public function getLocationById($locationId);
}
