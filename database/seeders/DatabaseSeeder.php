<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Ardian',
            'username' => 'ardian',
            'email' => 'ardianfirmansyah123@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('ardian123'),
            'roles' => 'ADMIN',
            // 'remember_token' => Str::random(10),
        ]);
        TravelPackage::create(
            [
                'title' => 'Wisata ke Karimun Jawa',
                'slug' => 'wisata-ke-karimun-jawa',
                'location' => 'Jepara, Jawa Tengah',
                'featured_event' => 'Snorkling dengan Hiu, Bakar Bakar',
                'language' => 'Indonesia',
                'about' => 'Ini adalah wisata keluarga dengan tarif murah ke Pulau Karimun Jawa',
                'foods' => 'Ayam Geprek, Tuna Bakar',
                'departure_date' => now(),
                'duration' => '3 days',
                'type' => 'Open Trip',
                'price' => '125000'
            ],
        );
        TravelPackage::create([
            'title' => 'Wonderful of Dieng',
            'slug' => 'wonderful-of-dieng',
            'location' => 'Banjarnegara, Jawa Tengah',
            'featured_event' => 'Pemotongan rambut anak gimbal, Live music',
            'language' => 'Indonesia',
            'about' => 'Wisata di pegunungan',
            'foods' => 'Mie Ongklok, Sate Bakar',
            'departure_date' => now(),
            'duration' => '3 days',
            'type' => 'Open Trip',
            'price' => '155000'
        ]);
    }
}