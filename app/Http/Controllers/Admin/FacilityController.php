<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->paginate(10);
        return view('admin.facility.index', compact('facilities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:classroom,smartclass,reading_room',
            'description' => 'nullable|string',
            'academic_days' => 'nullable|array',
            'academic_days.*' => 'in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'academic_hours' => 'nullable|string|max:255',
            'collaborative_hours' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['type', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
        $data['created_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('facilities/images', 'public');
            }
            $data['images'] = $imagePaths;
        }

        Facility::create($data);

        return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $request->validate([
            'type' => 'required|in:classroom,smartclass,reading_room',
            'description' => 'nullable|string',
            'academic_days' => 'nullable|array',
            'academic_days.*' => 'in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'academic_hours' => 'nullable|string|max:255',
            'collaborative_hours' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['type', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
        $data['updated_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('images')) {
            // Delete old images
            if ($facility->images) {
                foreach ($facility->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('facilities/images', 'public');
            }
            $data['images'] = $imagePaths;
        }

        $facility->update($data);

        return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->images) {
            foreach ($facility->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $facility->delete();

        return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil dihapus.');
    }
}
