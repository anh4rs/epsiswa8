<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public $random;
    // public __construct(){
    //     $this->random = Str::random(6);
    // }

    public function run()
    {
        // $random = Str::random(6);
        Kelas::create([
            'name' => 'X IPA 1',
            'status' => '1',
            'slug' => Str::slug('X IPA 1' . ' ' . Str::random(6), '-')
        ]);
        Kelas::create([
            'name' => 'X IPA 2',
            'status' => '0',
            'slug' => Str::slug('X IPA 2' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'X IPS 1',
            'status' => '1',
            'slug' => Str::slug('X IPS 1' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'X IPS 2',
            'status' => '1',
            'slug' => Str::slug('X IPS 2' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XI IPA 1',
            'status' => '1',
            'slug' => Str::slug('XI IPA 1' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XI IPA 2',
            'status' => '1',
            'slug' => Str::slug('XI IPA 2' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XI IPS 1',
            'status' => '1',
            'slug' => Str::slug('XI IPS 1' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XI IPS 2',
            'status' => '1',
            'slug' => Str::slug('XI IPS 2' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XII IPA 1',
            'status' => '1',
            'slug' => Str::slug('XII IPA 1' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XII IPA 2',
            'status' => '1',
            'slug' => Str::slug('XII IPA 2' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XII IPS 1',
            'status' => '1',
            'slug' => Str::slug('XII IPS 1' . ' ' . Str::random(6), '-')

        ]);
        Kelas::create([
            'name' => 'XII IPS 2',
            'status' => '1',
            'slug' => Str::slug('XII IPS 2' . ' ' . Str::random(6), '-')
        ]);
    }
}
