<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comida;
use App\Models\ComidaTipoComida;
use Illuminate\Database\Seeder;
use App\Models\TipoComida;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(5)->create();
        //Creacion de comida automatica con factory
        // Comida::factory(15)->create();

        $usuarioAdmin = new User();
        $usuarioAdmin->name = 'admin';
        $usuarioAdmin->email = 'admin@admin.admin';
        $usuarioAdmin->email_verified_at = now();
        $usuarioAdmin->remember_token = Str::random(10);
        $usuarioAdmin->password = Hash::make('admin');
        $usuarioAdmin->admin = true;
        $usuarioAdmin->save();

        $usuarioNormal = new User();
        $usuarioNormal->name = 'usuario';
        $usuarioNormal->email = 'usuario@usuario.usuario';
        $usuarioNormal->email_verified_at = now();
        $usuarioNormal->remember_token = Str::random(10);
        $usuarioNormal->password = Hash::make('usuario');
        $usuarioNormal->admin = false;
        $usuarioNormal->save();


        //Creación del tipo de comida
        $this->crearTipoComida();
        //Comidas
        $this->crearComida();
        //Comida tipo comida
        $this->crearComidaTipoComida();
    }

    private function crearComidaTipoComida()
    {
        $comidaTipoComida1 = new ComidaTipoComida();
        $comidaTipoComida1->id_comida = 1;
        $comidaTipoComida1->id_tipo = 1;
        $comidaTipoComida1->save();
        $comidaTipoComida2 = new ComidaTipoComida();
        $comidaTipoComida2->id_comida = 2;
        $comidaTipoComida2->id_tipo = 1;
        $comidaTipoComida2->save();
        $comidaTipoComida3 = new ComidaTipoComida();
        $comidaTipoComida3->id_comida = 3;
        $comidaTipoComida3->id_tipo = 1;
        $comidaTipoComida3->save();
        $comidaTipoComida4 = new ComidaTipoComida();
        $comidaTipoComida4->id_comida = 4;
        $comidaTipoComida4->id_tipo = 1;
        $comidaTipoComida4->save();
        $comidaTipoComida5 = new ComidaTipoComida();
        $comidaTipoComida5->id_comida = 5;
        $comidaTipoComida5->id_tipo = 1;
        $comidaTipoComida5->save();
        $comidaTipoComida6 = new ComidaTipoComida();
        $comidaTipoComida6->id_comida = 6;
        $comidaTipoComida6->id_tipo = 2;
        $comidaTipoComida6->save();
        $comidaTipoComida7 = new ComidaTipoComida();
        $comidaTipoComida7->id_comida = 7;
        $comidaTipoComida7->id_tipo = 2;
        $comidaTipoComida7->save();
        $comidaTipoComida8 = new ComidaTipoComida();
        $comidaTipoComida8->id_comida = 8;
        $comidaTipoComida8->id_tipo = 3;
        $comidaTipoComida8->save();
        $comidaTipoComida9 = new ComidaTipoComida();
        $comidaTipoComida9->id_comida = 9;
        $comidaTipoComida9->id_tipo = 3;
        $comidaTipoComida9->save();
        $comidaTipoComida10 = new ComidaTipoComida();
        $comidaTipoComida10->id_comida = 10;
        $comidaTipoComida10->id_tipo = 3;
        $comidaTipoComida10->save();
        $comidaTipoComida11 = new ComidaTipoComida();
        $comidaTipoComida11->id_comida = 11;
        $comidaTipoComida11->id_tipo = 3;
        $comidaTipoComida11->save();
        $comidaTipoComida12 = new ComidaTipoComida();
        $comidaTipoComida12->id_comida = 12;
        $comidaTipoComida12->id_tipo = 4;
        $comidaTipoComida12->save();
        $comidaTipoComida13 = new ComidaTipoComida();
        $comidaTipoComida13->id_comida = 13;
        $comidaTipoComida13->id_tipo = 4;
        $comidaTipoComida13->save();
        $comidaTipoComida14 = new ComidaTipoComida();
        $comidaTipoComida14->id_comida = 14;
        $comidaTipoComida14->id_tipo = 4;
        $comidaTipoComida14->save();
        $comidaTipoComida15 = new ComidaTipoComida();
        $comidaTipoComida15->id_comida = 15;
        $comidaTipoComida15->id_tipo = 4;
        $comidaTipoComida15->save();
    }

    private function crearComida()
    {
        $comida1 = new Comida();
        $comida1->nombre = 'Guacamole';
        $comida1->descripcion = 'Puré de aguacate con tomate, cebolla, cilantro y limón, servido con nachos o tortillas fritas.';
        $comida1->precio = 8;
        $comida1->ruta_imagen = 'https://i.blogs.es/faf951/guacamole/650_1200.jpg';
        $comida1->save();

        $comida2 = new Comida();
        $comida2->nombre = 'Ensalada Caprese';
        $comida2->descripcion = 'Ensalada de tomate, mozzarella y albahaca, aliñada con aceite de oliva y vinagre balsámico.';
        $comida2->precio = 10;
        $comida2->ruta_imagen = 'https://cdn.elcocinerocasero.com/imagen/receta/1000/2022-07-06-20-09-06/ensalada-caprese.jpeg';
        $comida2->save();

        $comida3 = new Comida();
        $comida3->nombre = 'Queso de cabra al horno';
        $comida3->descripcion = 'Queso de cabra caliente con miel, frutos secos y tostadas de pan.';
        $comida3->precio = 10;
        $comida3->ruta_imagen = 'https://ep00.epimg.net/elcomidista/imagenes/2019/05/29/receta/1559125986_844771_1559126534_rrss_normal.jpg';
        $comida3->save();

        $comida4 = new Comida();
        $comida4->nombre = 'Calamares a la romana';
        $comida4->descripcion = 'Anillas de calamar rebozadas en harina y fritas, servidas con salsa alioli.';
        $comida4->precio = 10;
        $comida4->ruta_imagen = 'https://www.hogarmania.com/archivos/202206/karl6992-calamares-romana-xl-1280x720x80xX.jpg';
        $comida4->save();

        $comida5 = new Comida();
        $comida5->nombre = 'Croquetas caseras';
        $comida5->descripcion = 'Croquetas de jamón, pollo o setas, con una cremosa bechamel y fritas.';
        $comida5->precio = 8;
        $comida5->ruta_imagen = 'https://www.recetasderechupete.com/wp-content/uploads/2015/05/croquetas_jamon.jpg';
        $comida5->save();

        $comida6 = new Comida();
        $comida6->nombre = 'Spaghetti alla carbonara';
        $comida6->descripcion = 'Pasta larga con una salsa de huevo, queso, panceta y pimienta negra.';
        $comida6->precio = 15;
        $comida6->ruta_imagen = 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/0346a29a89ef229b1a0ff9697184f944/Derivates/cb5051204f4a4525c8b013c16418ae2904e737b7.jpg';
        $comida6->save();

        $comida7 = new Comida();
        $comida7->nombre = 'Gazpacho';
        $comida7->descripcion = 'Sopa fría de tomate, pepino, pimiento, ajo y pan, aliñada con aceite de oliva y vinagre.';
        $comida7->precio = 10;
        $comida7->ruta_imagen = 'https://i.blogs.es/a8ade0/gazpacho_tradicional/840_560.jpg';
        $comida7->save();

        $comida8 = new Comida();
        $comida8->nombre = 'Ensalada César';
        $comida8->descripcion = 'Ensalada de lechuga romana, pollo a la parrilla, croutones y queso parmesano, con una salsa César.';
        $comida8->precio = 8;
        $comida8->ruta_imagen = 'https://www.pequeocio.com/wp-content/uploads/elementor/thumbs/ensalada-cesar-pa2bqzxrfu8d322rs4lr2tacg26tqau9kp8zb5wq5s.jpg';
        $comida8->save();

        $comida9 = new Comida();
        $comida9->nombre = 'Salmón al horno';
        $comida9->descripcion = 'Filete de salmón horneado con hierbas, servido con verduras asadas y arroz.';
        $comida9->precio = 18;
        $comida9->ruta_imagen = 'https://www.paulinacocina.net/wp-content/uploads/2022/05/receta-de-salmon-al-horno.jpg';
        $comida9->save();

        $comida10 = new Comida();
        $comida10->nombre = 'Bistec a la parrilla';
        $comida10->descripcion = 'Filete de ternera a la parrilla, servido con patatas fritas y una salsa de elección.';
        $comida10->precio = 20;
        $comida10->ruta_imagen = 'https://cocina-casera.com/wp-content/uploads/2018/01/Carne-a-la-parilla.jpg';
        $comida10->save();

        $comida11 = new Comida();
        $comida11->nombre = 'Pollo al curry';
        $comida11->descripcion = 'Trozos de pollo en una salsa de curry cremosa con cebolla, ajo y jengibre, servido con arroz basmati.';
        $comida11->precio = 17;
        $comida11->ruta_imagen = 'https://www.pequerecetas.com/wp-content/uploads/2021/05/pollo-al-curry-con-nata-1.jpg';
        $comida11->save();

        $comida12 = new Comida();
        $comida12->nombre = 'Tiramisú';
        $comida12->descripcion = 'Postre italiano de capas de bizcocho empapado en café y crema de mascarpone, espolvoreado con cacao en polvo.';
        $comida12->precio = 8;
        $comida12->ruta_imagen = 'https://www.quieropostre.com/wp-content/uploads/2021/10/receta-del-tiramisu.jpg';
        $comida12->save();

        $comida13 = new Comida();
        $comida13->nombre = 'Crème brûlée';
        $comida13->descripcion = 'Flan de vainilla con una capa crujiente de azúcar caramelizado en la parte superior.';
        $comida13->precio = 7;
        $comida13->ruta_imagen = 'https://d320djwtwnl5uo.cloudfront.net/recetas/cover/creme_ym8t9WVSMv2RrYHQwxgEZlTphPjJz3.png';
        $comida13->save();

        $comida14 = new Comida();
        $comida14->nombre = 'Cheesecake de frutas del bosque';
        $comida14->descripcion = 'Tarta de queso horneada con una base de galletas y una cobertura de frutas del bosque.';
        $comida14->precio = 9;
        $comida14->ruta_imagen = 'https://i.ytimg.com/vi/V7j2catMyDg/maxresdefault.jpg';
        $comida14->save();

        $comida15 = new Comida();
        $comida15->nombre = 'Helado artesanal';
        $comida15->descripcion = 'Variedad de sabores de helado hechos a mano con ingredientes frescos y naturales, como vainilla, chocolate, fresa, limón, etc.';
        $comida15->precio = 4;
        $comida15->ruta_imagen = 'https://mejisa.com/wp-content/uploads/2019/04/helado-artesanal.jpg';
        $comida15->save();
    }

    private function crearTipoComida()
    {
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
