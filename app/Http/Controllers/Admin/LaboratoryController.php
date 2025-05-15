<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laboratory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LaboratoryController extends Controller
{
    public function index()
    {
        $laboratories = Laboratory::latest()->paginate(10);
        return view('admin.laboratory.index', compact('laboratories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'academic_days' => 'nullable|array',
                'academic_days.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'academic_hours' => 'nullable|string|max:255',
                'collaborative_hours' => 'nullable|string|max:255',
                'images' => 'nullable|array|max:5',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->only(['name', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
            $data['created_by'] = Auth::guard('admin')->id() ?? null;

            $laboratory = DB::transaction(function () use ($request, $data) {
                if ($request->hasFile('images')) {
                    $imagePaths = [];
                    foreach ($request->file('images') as $image) {
                        $imagePaths[] = $image->store('laboratories/images', 'public');
                    }
                    $data['images'] = $imagePaths;
                }
                return Laboratory::create($data);
            });

            Log::info('Laboratory created', ['laboratory_id' => $laboratory->id]);

            return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error creating laboratory: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menambahkan laboratorium: ' . $e->getMessage())->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $laboratory = Laboratory::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'academic_days' => 'nullable|array',
                'academic_days.*' => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'academic_hours' => 'nullable|string|max:255',
                'collaborative_hours' => 'nullable|string|max:255',
                'images' => 'nullable|array|max:5',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = $request->only(['name', 'description', 'academic_days', 'academic_hours', 'collaborative_hours']);
            $data['updated_by'] = Auth::guard('admin')->id() ?? null;

            $laboratory = DB::transaction(function () use ($request, $laboratory, $data) {
                if ($request->hasFile('images')) {
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
                return $laboratory;
            });

            Log::info('Laboratory updated', ['laboratory_id' => $laboratory->id]);

            return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error updating laboratory: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui laboratorium: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $laboratory = Laboratory::findOrFail($id);

            if ($laboratory->images) {
                foreach ($laboratory->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            $laboratory->delete();

            Log::info('Laboratory deleted', ['laboratory_id' => $id]);

            return redirect()->route('admin.laboratory.index')->with('success', 'Laboratorium berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error deleting laboratory: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus laboratorium: ' . $e->getMessage());
        }
    }
}
