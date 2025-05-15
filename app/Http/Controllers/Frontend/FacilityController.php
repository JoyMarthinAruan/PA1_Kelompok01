<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        // Fetch all facilities and group by type
        $facilities = Facility::all()->groupBy('type');

        return view('facility', compact('facilities'));
    }
}
