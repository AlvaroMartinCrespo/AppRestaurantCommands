<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comida;
use Illuminate\Database\Seeder;
use App\Models\TipoComida;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Comida::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Creación del tipo de comida
        $tipoComida1 = new TipoComida();
        $tipoComida1->nombre = 'Entrantes.';
        $tipoComida1->descripcion = 'Platos que se sirven al inicio de la comida.';
        $tipoComida1->save();
        $tipoComida2 = new TipoComida();
        $tipoComida2->nombre = 'Primer Plato.';
        $tipoComida2->descripcion = 'Platos que se sirven después de los entrantes.';
        $tipoComida2->save();
        $tipoComida3 = new TipoComida();
        $tipoComida3->nombre = 'Segundo Plato.';
        $tipoComida3->descripcion = 'Platos que se sirven después del primer plato.';
        $tipoComida3->save();
        $tipoComida4 = new TipoComida();
        $tipoComida4->nombre = 'Postres.';
        $tipoComida4->descripcion = 'Platos dulces que se sirven al final de la comida.';
        $tipoComida4->save();
    }
}
