<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(Request $request, $type)
    {
        $facilities = Facility::where('type', $type)->get();
        return view('facility', compact('facilities', 'type'));
    }
}
