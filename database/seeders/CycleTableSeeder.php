<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cycles")->insert([
            ["libelle"=>"licence1"],
            ["libelle"=>"licence2"],
            ["libelle"=>"master1"],
            ["libelle"=>"master2"],
        ]);
    }
}
