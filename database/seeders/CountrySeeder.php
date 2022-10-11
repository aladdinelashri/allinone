<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = [

        ['code' => 'EG','name' => "جمهورية مصر العربية",'phonecode' => 20],

        ];
        DB::table('countries')->insert($countries);
    }
}
