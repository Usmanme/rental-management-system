<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Membership())->create([
            'type'=>'Gold',
        ]);
        (new Membership())->create([
            'type'=>'Silver',

        ]);
        (new Membership())->create([

            'type'=>'Bronze',
        ]);
        (new Membership())->create([
            'type'=>'Staff',
        ]);
    }
}
