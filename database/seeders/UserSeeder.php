<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Hapus semua data lama di tabel users
        User::truncate();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'divisi' => 'Web Development',
            'phone' => '081234567890',
            'address' => 'Jarum, Bayat, Klaten, Jawa Tengah',
        ]);

        User::create([
            'name' => 'Nur Dita Damayanti',
            'email' => 'dita@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);
    }
}
