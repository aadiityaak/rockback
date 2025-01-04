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

        User::create([
            'name' => 'Aditya Kristyanto',
            'email' => 'adityak@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Aditya',
            'email' => 'adityathok@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Irawan Yulianto',
            'email' => 'irawanyuli@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Shudqi Tabarak',
            'email' => 'shudqi@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Lavaura Lingga Buana',
            'email' => 'lingga@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Dimas Radian Canang',
            'email' => 'dimasrc@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Eko Mustaqim',
            'email' => 'mustaqimeko@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Project Manager',
        ]);

        User::create([
            'name' => 'Kendra',
            'email' => 'kendra@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Project Manager',
        ]);

        User::create([
            'name' => 'Rahmad',
            'email' => 'rahmad@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Project Manager',
        ]);

        User::create([
            'name' => 'Aji',
            'email' => 'aji@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Project Manager',
        ]);

        User::create([
            'name' => 'Rika',
            'email' => 'rika@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Project Manager',
        ]);

        User::create([
            'name' => 'Agus Dwi Yulianto',
            'email' => 'agusdwiyul@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Support',
        ]);

        User::create([
            'name' => 'Fajar Irawan',
            'email' => 'fajarirawan@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Support',
        ]);

        User::create([
            'name' => 'Muhammad Nur Isnaini',
            'email' => 'muhnur@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Manager',
        ]);

        User::create([
            'name' => 'Siti Sholihah',
            'email' => 'sitisho@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Customer Service',
        ]);

        User::create([
            'name' => 'Vicky',
            'email' => 'vicky@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Customer Service',
        ]);

        User::create([
            'name' => 'Yoga Aksa',
            'email' => 'yoga@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Customer Service',
        ]);

        User::create([
            'name' => 'Ahmad Nur Iksan',
            'email' => 'iksan@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Customer Service',
        ]);

        User::create([
            'name' => 'Ibni Galib Mudasir',
            'email' => 'galib@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Customer Service',
        ]);

        User::create([
            'name' => 'Sri Rejeki Ayu Saputri',
            'email' => 'ayu@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Ads Team',
        ]);

        User::create([
            'name' => 'Muhamad Sofyan Ramadhan',
            'email' => 'sofyan@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Ads Team',
        ]);

        User::create([
            'name' => 'Bima Ismayuda',
            'email' => 'bima@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Ads Team',
        ]);

        User::create([
            'name' => 'Diah Anggun Risabela',
            'email' => 'anggun@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Ads Team',
        ]);

        User::create([
            'name' => 'Yuda Anggoro',
            'email' => 'yuda@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Revisi Team',
        ]);

        User::create([
            'name' => 'Reza Dheanofa Rahmadani Akbar',
            'email' => 'reza@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Revisi Team',
        ]);

        User::create([
            'name' => 'Gio',
            'email' => 'gio@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);

        User::create([
            'name' => 'Andi',
            'email' => 'andi@example.com',
            'password' => Hash::make('password'),
            'divisi' => 'Web Development',
        ]);
    }
}
