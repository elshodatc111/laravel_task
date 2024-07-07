<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rool;
class RoolSeeder extends Seeder
{
    public function run(): void
    {
        Rool::create(['name'=>'meneger']);
        Rool::create(['name'=>'clent']);
    }
}
