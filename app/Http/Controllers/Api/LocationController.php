<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\LocationsNearRequest;
use App\Http\Requests\LocationsRequest;
use App\Interfaces\LocationRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocationController extends Controller
{

    private LocationRepositoryInterface $locationRepository;

    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    public function index(LocationsRequest $request): JsonResponse
    {
        $zip = $request->query('zip');

        return response()->json([
            'data' => $this->locationRepository->getLocations($zip)
        ]);
    }

    public function near(LocationsNearRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $lat = $validated['lat'];
        $lon = $validated['lon'];

        return response()->json([
            'data' => $this->locationRepository->getLocationsNear($lat,$lon)
        ]);
    }

    public function show(Request $request): JsonResponse
    {
        $locationId = $request->route('id');

        return response()->json([
            'data' => $this->locationRepository->getLocationById($locationId)
        ]);
    }



}
