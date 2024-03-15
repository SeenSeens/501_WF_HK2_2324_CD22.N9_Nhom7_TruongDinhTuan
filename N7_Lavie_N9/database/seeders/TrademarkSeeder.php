<?php

namespace Database\Seeders;

use App\Models\Trademark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trademarks')->delete();
        Trademark::factory(5)->create();
    }
}
