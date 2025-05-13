<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Log::info('Login attempt', ['email' => $request->email]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            Log::warning('Login failed: User not found', ['email' => $request->email]);
            return back()->withErrors(['email' => 'Email tidak ditemukan.'])->withInput($request->only('email'));
        }

        if (!$admin->is_active) {
            Log::warning('Login failed: Account is not active', ['email' => $request->email]);
            return back()->withErrors(['email' => 'Akun Anda belum aktif.'])->withInput($request->only('email'));
        }

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            Log::info('Login successful', ['email' => $request->email]);
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
        } else {
            $passwordMatch = Hash::check($request->password, $admin->password);
            Log::warning('Login failed: Password mismatch', [
                'email' => $request->email,
                'password_match' => $passwordMatch,
            ]);
            return back()->withErrors(['email' => 'Password salah.'])->withInput($request->only('email'));
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('success', 'Logout berhasil!');
    }
}
