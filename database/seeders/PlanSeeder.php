<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan1 = new Plan;
        $plan1->plan = 'Bronce';
        $plan1->duration = 36000;
        $plan1->description = 'Adopta Tableau para tu compañía en 5 pasos';
        $plan1->save();

        $plan2 = new Plan;
        $plan2->plan = 'Plata';
        $plan2->duration = 93600;
        $plan2->description = 'Comienza a desarrollar con Tableau en 7 Pasos';
        $plan2->save();

        $plan3 = new Plan;
        $plan3->plan = 'Oro';
        $plan3->duration = 122400;
        $plan3->description = 'Comienza a convertirte en una compañía Datadriven en 10 Pasos';
        $plan3->save();

        // $plan4 = new Plan;
        // $plan4->plan = 'Platinum';
        // $plan4->save();

        // $plan5 = new Plan;
        // $plan5->plan = 'Diamond';
        // $plan5->save();
    }
}
