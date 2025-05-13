<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginAdmin extends Command
{
    protected $signature = 'admin:login';
    protected $description = 'Log in the first admin user for testing';

    public function handle()
    {
        $admin = Admin::first();
        if ($admin) {
            Auth::guard('admin')->login($admin);
            $this->info('Admin logged in successfully: ' . $admin->email);
        } else {
            $this->error('No admin user found. Please seed the admins table.');
        }
    }
}
