<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;
use App\Models\Portal;

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
        Division::create([
            'name' => 'Enggeneering',
            'slug' => 'engeneering'
        ]);

        Division::create([
            'name' => 'SDM Umum',
            'slug' => 'SDM Umum'
        ]);

        Division::create([
            'name' => 'Keuagan',
            'slug' => 'Keuagan'
        ]);

        Division::create([
            'name' => 'Komersial',
            'slug' => 'Komersial'
        ]);

        Portal::create([
            'division_id' => '2',
            'name' => 'SENA Aplikasi Documentary System',
            'link' => 'https://sites.google.com/pt-sena.co.id/ekm',
            'des' => 'Website Tersedia'
        ]);

        Portal::create([
            'division_id' => '2',
            'name' => 'SENA Aplikasi Vendor Management System',
            'link' => 'http://www.pt-sena.co.id:8080/',
            'des' => 'Website Tersedia'
        ]);

        Portal::create([
            'division_id' => '2',
            'name' => 'SENA Aplikasi Buku Tamu/Visitor Sena',
            'link' => 'http://books.pt-sena.id/',
            'des' => 'Website Tersedia'
        ]);

        Portal::create([
            'division_id' => '2',
            'name' => 'SENA Aplikasi Peminjaman Kendaraan',
            'link' => 'https://sites.google.com/pt-sena.co.id/ekm',
            'des' => 'Website Tersedia'
        ]);

        Portal::create([
            'division_id' => '1',
            'name' => 'Web SENA',
            'link' => 'http://rooms.pt-sena.id/day.php?year=2020&month=03&day=06&area=1&room=1',
            'des' => 'Website belum bisa di akses'
        ]);



        Portal::create([
            'division_id' => '3',
            'name' => 'Web SENA',
            'link' => 'https://sites.google.com/pt-sena.co.id/ekm',
            'des' => 'Website belum bisa di akses'
        ]);

        Portal::create([
            'division_id' => '4',
            'name' => 'Web SENA',
            'link' => 'https://sites.google.com/pt-sena.co.id/ekm',
            'des' => 'Website belum bisa di akses'
        ]);
    }
}
