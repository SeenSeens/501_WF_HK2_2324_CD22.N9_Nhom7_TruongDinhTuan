<?php

namespace Database\Seeders;

use App\Models\Stock;
use Database\Factories\StockFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->delete();
        Stock::factory(5)->create();
    }
}
