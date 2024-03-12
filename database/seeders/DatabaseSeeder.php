<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlansSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MembershipSeeder::class);
        $this->call(PaymentSeeder::class);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin.rental@rental.com',
            'country_code'=>'AU',
            'phone_no'=>'300 3456899',
            'role'=>User::CUSTOMER,
            'plan_id'=>1,
            'password' => Hash::make('password')
        ]);
    }
}
