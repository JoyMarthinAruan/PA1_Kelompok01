<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        dd($testimonials);
        return view('frontend.testimonial.index', compact('testimonials'));
    }
}
