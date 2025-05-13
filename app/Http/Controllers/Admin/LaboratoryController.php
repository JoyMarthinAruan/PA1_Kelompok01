<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laboratory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LaboratoryController extends Controller
{
    public function index()
    {
        $laboratories = Laboratory::latest()->paginate(10);
        return view('admin.laboratory.index', compact('laboratories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'academic_days' => 'nullable|array',
            'academic_days.*' => 'in:in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'academic_hours' => 'nullable|string|max:255',
            'collaborative_hours' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
        $data['created_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('laboratories/images', 'public');
            }
            $data['images'] = $imagePaths;
        }

        Laboratory::create($data);

        return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $laboratory = Laboratory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'academic_days' => 'nullable|array',
            'academic_days.*' => 'in:in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'academic_hours' => 'nullable|string|max:255',
            'collaborative_hours' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
        $data['updated_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('images')) {
            // Delete old images
            if ($laboratory->images) {
                foreach ($laboratory->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('laboratories/images', 'public');
            }
            $data['images'] = $imagePaths;
        }

        $laboratory->update($data);

        return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $laboratory = Laboratory::findOrFail($id);

        if ($laboratory->images) {
            foreach ($laboratory->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $laboratory->delete();

        return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil dihapus.');
    }
}
