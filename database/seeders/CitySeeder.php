<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities=[
            ['city_name' => 'ابو ديس'],
            ['city_name' => 'البيرة'],
            ['city_name' => 'القدس'],
            ['city_name' => 'بيت لحم'],
            ['city_name' => 'بيت جالا'],
            ['city_name' => 'بيت ساحور'],
            ['city_name' => 'الخليل'],
            ['city_name' => 'أريحا'],
            ['city_name' => 'جنين'],
            ['city_name' => 'قلقيلية'],
            ['city_name' => 'نابلس'],
            ['city_name' => 'رام الله'],
            ['city_name' => 'سلفيت'],
            ['city_name' => 'طولكرم'],
         
        ];
        DB::table('cities')->insert($cities);
    }
}
