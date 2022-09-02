<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp; //Agarramos el modelo de User que ya trae Laravel
use File;
use Illuminate\Support\Facades\Hash; //Para encriptar

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json utilizando el "file"
        //2. Convertir el contenido JSON a un arreglo en PHP
        //3. Recorrer el arreglo en PHP
        //4. Por cada uno de los elementos del arreglo crear user

        /////////////////////////////////////////////////////////

        //1. Leer el archivo users.json utilizando el "file"
        $json=File::get("database/_data/bootcamps.json");
        //2. Convertir el contenido JSON a un arreglo en PHP
        $arreglo=json_decode($json);
        var_dump($arreglo); 
        //3. Recorrer el arreglo en PHP
        foreach ($arreglo as $b) {
            //4. Por cada uno de los elementos del arreglo crear user
            $newBootcamp = new Bootcamp();
            $newBootcamp->name = $b->name;
            $newBootcamp->website = $b->website;
            $newBootcamp->phone = $b->phone;
            $newBootcamp->user_id = $b->user_id;
            $newBootcamp->description = $b->description;
            $newBootcamp->average_cost = $b->average_cost;
            $newBootcamp->average_rating = $b->average_rating;
            $newBootcamp->save();
        }
    }
}
