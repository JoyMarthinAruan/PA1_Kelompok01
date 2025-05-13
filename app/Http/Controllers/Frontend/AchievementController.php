<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;

class AchievementController extends Controller
{
    private $perPage = 6; // Jumlah item per halaman

    public function index()
    {
        $achievements = Achievement::latest()->paginate($this->perPage);
        return view('achievements.achievement', compact('achievements')); // Default view, mungkin perlu disesuaikan
    }

    public function publication()
    {
        $publications = Achievement::where('type', 'publikasi')
            ->latest()
            ->paginate(6);

        return view('achievements.publication', compact('publications'));
    }

    public function research()
    {
        $researches = Achievement::where('type', 'penelitian')
            ->latest()
            ->paginate(6);

        return view('achievements.research', compact('researches'));
    }

    public function achievement()
    {
        $achievements = Achievement::where('type', 'pencapaian') // Atau ganti sesuai kebutuhan
            ->latest()
            ->paginate(6);

        return view('achievements.achievement', compact('achievements'));
    }
}
