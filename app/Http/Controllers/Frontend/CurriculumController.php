<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curriculum; // Tambahkan ini

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::all();
        return view('frontend.curriculum.index', compact('curriculums'));
    }
}

