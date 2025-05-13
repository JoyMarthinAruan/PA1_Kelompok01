<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admins = [
            [
                'name' => 'Felicya Panjaitan',
                'email' => 'felicyapanjaitan@gmail.com',
                'password' => 'felicyaa.123',
                'is_active' => true,
            ],
            [
                'name' => 'General Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'is_active' => true,
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'password' => 'mahasiswa123',
                'is_active' => true,
            ],
            [
                'name' => 'Kaprodi',
                'email' => 'kaprodi@gmail.com',
                'password' => 'kaprodi123',
                'is_active' => true,
            ],
        ];

        foreach ($admins as $adminData) {
            try {
                $email = $adminData['email'];
                if (!Admin::where('email', $email)->exists()) {
                    Admin::create([
                        'name' => $adminData['name'],
                        'email' => $email,
                        'password' => $adminData['password'],
                        'is_active' => $adminData['is_active'],
                    ]);
                    echo "Admin with email $email created successfully!\n";
                } else {
                    echo "Admin with email $email already exists.\n";
                }
            } catch (\Exception $e) {
                echo "Error creating admin with email $email: " . $e->getMessage() . "\n";
            }
        }
    }
}
