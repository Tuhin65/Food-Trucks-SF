<?php

namespace App\Repositories;

use App\Interfaces\LocationRepositoryInterface;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationRepository implements LocationRepositoryInterface
{

    public function getLocations($zip = 0)
    {
        if($zip){
            return Location::where('zip',$zip)->get();
        }else{
            return Location::all();
        }
    }

    public function getLocationsNear($lat,$lon)
    {
        $locations = DB::select( DB::raw("SELECT *, power((latitude - :lat),2) + power((longitude - :lon),2) distance FROM locations WHERE latitude > 0 ORDER BY distance DESC LIMIT 8"),
            array('lat' => $lat, 'lon' => $lon));

        return $locations;
    }

    public function getLocationById($locationId)
    {
        return Location::find($locationId);
    }

}
