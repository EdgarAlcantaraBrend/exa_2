<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="Corazon de pollo";
        $libros->autor="Indri Dumont";
        $libros->editorial="Sotano";
        $libros->fecha_publicacion="2011-04-09";
        $libros->numero_pagina="345";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="Gotas de bien";
        $libros2->autor="Julie K Hersh";
        $libros2->editorial="Greenleaf Book";
        $libros2->fecha_publicacion="2014-08-21";
        $libros2->numero_pagina="370";

        $libros2->save();
    }
}
