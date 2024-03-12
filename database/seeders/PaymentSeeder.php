<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Payment())->create([
            'type'=>'Monday Same Week',
        ]);
        (new Payment())->create([
            'type'=>'Tuesday Same Week',
        ]);
        (new Payment())->create([
            'type'=>'Wednesday Same Week',
        ]);
        (new Payment())->create([
            'type'=>'Thursday Same Week',
        ]);
        (new Payment())->create([
            'type'=>'Friday Same Week',
        ]);
        (new Payment())->create([
            'type'=>'Monday next Week',
        ]);
        (new Payment())->create([
            'type'=>'Tueday next Week',
        ]);
        (new Payment())->create([
            'type'=>'Wednesday next Week',
        ]);
        (new Payment())->create([
            'type'=>'Thursday next Week',
        ]);
        (new Payment())->create([
            'type'=>'Friday next Week',
        ]);
    }
}
