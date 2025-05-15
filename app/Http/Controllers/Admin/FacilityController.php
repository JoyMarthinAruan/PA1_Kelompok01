<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->paginate(10);
        return view('admin.facility.index', compact('facilities'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'type' => 'required|in:classroom,smartclass,reading_room',
                'description' => 'nullable|string',
                'academic_days' => 'nullable|array',
                'academic_days.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
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

            $facility = Facility::create($data);

            Log::info('Facility created', ['facility_id' => $facility->id]);

            return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error creating facility: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menambahkan fasilitas: ' . $e->getMessage())->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $facility = Facility::findOrFail($id);

            $request->validate([
                'type' => 'required|in:classroom,smartclass,reading_room',
                'description' => 'nullable|string',
                'academic_days' => 'nullable|array',
                'academic_days.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'academic_hours' => 'nullable|string|max:255',
                'collaborative_hours' => 'nullable|string|max:255',
                'images' => 'nullable|array|max:5',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->only(['type', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
            $data['updated_by'] = Auth::guard('admin')->id() ?? null;

            if ($request->hasFile('images')) {
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

            Log::info('Facility updated', ['facility_id' => $facility->id]);

            return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error updating facility: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui fasilitas: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $facility = Facility::findOrFail($id);

            if ($facility->images) {
                foreach ($facility->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            $facility->delete();

            Log::info('Facility deleted', ['facility_id' => $id]);

            return redirect()->route('admin.facility.index')->with('success', 'Fasilitas berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error deleting facility: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus fasilitas: ' . $e->getMessage());
        }
    }
}
