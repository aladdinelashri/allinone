<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => 'دولار أمريكى',
                'code' => 'USD',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
            ],
            [
                'name' => 'جنيه اسنرلينى',
                'code' => 'GBP',
                'symbol' => '£',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
            ],
            [
                'name' => 'يورو',
                'code' => 'EUR',
                'symbol' => '€',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ',',

            ],

            [
                'name' => 'الجنيه المصرى',
                'code' => 'EGP',
                'symbol' => 'E£',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
            ],

        ];


        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
