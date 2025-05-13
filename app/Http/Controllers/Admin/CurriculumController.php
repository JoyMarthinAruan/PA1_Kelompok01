<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::latest()->paginate(10);
        return view('admin.curriculum.index', compact('curriculums'));
    }

    public function create()
    {
        return view('admin.curriculum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|string|max:255|unique:curriculums,course_code',
            'course_name' => 'required|string|max:255',
            'semester' => 'required|integer|between:1,8',
            'credits' => 'required|integer|min:1',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        Curriculum::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'semester' => $request->semester,
            'credits' => $request->credits,
            'status' => $request->status,
            'created_by' => Auth::guard('admin')->id() ?? null,
        ]);

        return redirect()->route('admin.curriculum.index')->with('success', 'Kurikulum berhasil ditambahkan.');
    }

    public function show($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        return view('admin.curriculum.show', compact('curriculum'));
    }

    public function edit($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        return view('admin.curriculum.edit', compact('curriculum'));
    }

    public function update(Request $request, $id)
    {
        $curriculum = Curriculum::findOrFail($id);

        $request->validate([
            'course_code' => 'required|string|max:255|unique:curriculums,course_code,' . $curriculum->id,
            'course_name' => 'required|string|max:255',
            'semester' => 'required|integer|between:1,8',
            'credits' => 'required|integer|min:1',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        $curriculum->update([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'semester' => $request->semester,
            'credits' => $request->credits,
            'status' => $request->status,
            'updated_by' => Auth::guard('admin')->id() ?? null,
        ]);

        return redirect()->route('admin.curriculum.index')->with('success', 'Kurikulum berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        $curriculum->delete();

        return redirect()->route('admin.curriculum.index')->with('success', 'Kurikulum berhasil dihapus.');
    }
}
