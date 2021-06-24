<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

  
        /*  $table->id();
            $table->string('reference', 12);
            $table->string('type',100);
            $table->string('location',100);
            $table->tinyInteger('days')->unsigned();
            $table->tinyInteger('passeggers')->unsigned();
            $table->text('description')->nullable();
            $table->float('price',6,2);
            $table->timestamps(); */
    
    {
    
        for($i=0; $i < 20; $i++){

            //$travel = new Travel();
            $travel = new Travel();
            $travel->reference=$faker->bothify('??-#######');
            $travel->type=$this->typeRandom();
            $travel->location=$faker->state();
            $travel->days=$faker->numberBetween(1,20);
            $travel->passeggers=$faker->numberBetween(1,10);
            $travel->price=$faker->randomFloat(2,300,10000);
            $travel->save();
        }

        
    }
    private function typeRandom(){
        $arr=['Mare','Montagna','Neve','Crociera','Relax','Avventura'];
        shuffle($arr);//mescola gli elementi del mio $arr
        return $arr[0];
    }
}
