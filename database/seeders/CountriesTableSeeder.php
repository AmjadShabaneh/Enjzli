<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $countries = [
                [ 'name' => 'فلسطين '],
                [ 'name' => 'الأردن'],
                [ 'name' => 'مصر'],
                [ 'name' => 'لبنان'],
                [ 'name' => 'سوريا'],
                [ 'name' => 'العراق'],
                [ 'name' => 'اليمن'],
                [ 'name' => 'السعودية'],
                // Add more countries as needed
            ];
    
            DB::table('countries')->insert($countries);
        
    }
}
