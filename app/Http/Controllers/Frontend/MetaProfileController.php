<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MetaProfile;
use App\Models\Curriculum;

class MetaProfileController extends Controller
{
    public function index()
    {
        $metaprofiles = MetaProfile::all();
        return view('metaprofile', compact('metaprofiles'));
    }

    public function curriculum()
    {
        $curriculums = Curriculum::all();

        return view('curriculum', compact('curriculums'));
    }
}
