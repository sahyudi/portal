<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            'judul' => $judul = 'Web Design',
            'slug' => Str::slug($judul),
            'deskripsi' => '',
            'syarat' => '',
        ]);
    }
}
