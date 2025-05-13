<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StructureOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StructureOrganizationController extends Controller
{
    public function index()
    {
        $structures = StructureOrganization::with('parent')->latest()->paginate(10);
        return view('admin.structure_organization.index', compact('structures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'degree' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:structureorganizations,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'title', 'degree', 'parent_id']);
        $data['created_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('structure/images', 'public');
        }

        StructureOrganization::create($data);

        return redirect()->route('admin.structure_organization.index')->with('success', 'Struktur Organisasi berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $structure = StructureOrganization::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'degree' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:structureorganizations,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'title', 'degree', 'parent_id']);
        $data['updated_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('image')) {
            if ($structure->image) {
                Storage::disk('public')->delete($structure->image);
            }
            $data['image'] = $request->file('image')->store('structure/images', 'public');
        }

        $structure->update($data);

        return redirect()->route('admin.structure_organization.index')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $structure = StructureOrganization::findOrFail($id);

        if ($structure->image) {
            Storage::disk('public')->delete($structure->image);
        }

        $structure->delete();

        return redirect()->route('admin.structure_organization.index')->with('success', 'Struktur Organisasi berhasil dihapus.');
    }
}
