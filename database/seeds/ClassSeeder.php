<?php

use Illuminate\Database\Seeder;

use App\Classes;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $class = Classes::create([
            'id_class'=>1,
            'name_class' => '18IF1'
        ]);
    }
}
