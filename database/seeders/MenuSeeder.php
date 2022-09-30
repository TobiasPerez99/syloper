<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(
        [
            'url' => '/',
            'icono' => 'fa-house',
            'nombre' => 'Inicio',
            'descripcion' => 'Ir al inicio',
            'target' => '_self',
            'estado' => '1',

        ]);
        DB::table('menus')->insert(
        [
            'url' => '/dashboard/post',
            'icono' => 'fa-house',
            'nombre' => 'Posteos',
            'descripcion' => 'Ir a los postes',
            'target' => '_self',
            'estado' => '1',

        ]);
        DB::table('menus')->insert(       
        [
            'url' => '/dashboard/menu',
            'icono' => 'fa-house',
            'nombre' => 'Menu',
            'descripcion' => 'Ir a la configuracion de menu',
            'target' => '_self',
            'estado' => '1',
        ]);
    }
}
