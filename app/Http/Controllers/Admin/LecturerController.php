<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::latest()->paginate(10);
        return view('admin.lecturer.index', compact('lecturers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|string|max:255|unique:lecturers',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:lecturers',
            'linkedIn' => 'nullable|url|max:255',
            'room' => 'required|string|max:255',
            'education' => 'required|string',
            'research' => 'required|string',
            'courses' => 'required|string',
        ]);

        $data = $request->only(['employee_id', 'name', 'email', 'linkedIn', 'room', 'education', 'research', 'courses']);
        $data['created_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('lecturers/images', 'public');
        }

        Lecturer::create($data);

        return redirect()->route('admin.lecturer.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::findOrFail($id);

        $request->validate([
            'employee_id' => 'required|string|max:255|unique:lecturers,employee_id,' . $lecturer->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:lecturers,email,' . $lecturer->id,
            'linkedIn' => 'nullable|url|max:255',
            'room' => 'required|string|max:255',
            'education' => 'required|string',
            'research' => 'required|string',
            'courses' => 'required|string',
        ]);

        $data = $request->only(['employee_id', 'name', 'email', 'linkedIn', 'room', 'education', 'research', 'courses']);
        $data['updated_by'] = Auth::guard('admin')->id() ?? null;

        if ($request->hasFile('image')) {
            if ($lecturer->image) {
                Storage::disk('public')->delete($lecturer->image);
            }
            $data['image'] = $request->file('image')->store('lecturers/images', 'public');
        }

        $lecturer->update($data);

        return redirect()->route('admin.lecturer.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $lecturer = Lecturer::findOrFail($id);

        if ($lecturer->image) {
            Storage::disk('public')->delete($lecturer->image);
        }

        $lecturer->delete();

        return redirect()->route('admin.lecturer.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
