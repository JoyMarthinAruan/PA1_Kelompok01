<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\StructureOrganization;
use Illuminate\Http\Request;

class StructureOrganizationController  extends Controller
{
    /**
     * Display the organizational structure.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $organizations = StructureOrganization::orderBy('level', 'asc')
            ->orderBy('order', 'asc')
            ->get();

        return view('structureorganization', compact('organizations'));
    }
}
