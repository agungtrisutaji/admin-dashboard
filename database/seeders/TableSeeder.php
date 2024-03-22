<?php

namespace Database\Seeders;

use App\Models\Stock;
use App\Models\Suplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $supliers = Suplier::factory()->count(10)->create();

        // Buat data Stock dan hubungkan dengan Suplier yang telah dibuat
        foreach ($supliers as $suplier) {
            Stock::factory()->count(10)->for($suplier)->create();
        }
    }
}
