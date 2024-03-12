<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        (new Category())->create([
            'name'=>'Staff',
        ]);
        (new Category())->create([
            'name'=>'Business Client',
        ]);
        (new Category())->create([
            'name'=>'Rental Client',
        ]);
        (new Category())->create([
            'name'=>'Partner',
        ]);

    }
}
