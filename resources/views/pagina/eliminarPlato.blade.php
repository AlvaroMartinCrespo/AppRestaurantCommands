@extends('layouts/pagina')

@section('contentPage')

        <div class="w-screen">
            <img class=" object-none w-screen h-44" src="https://www.crearmas.com/wp-content/uploads/2018/11/el-consumo-de-comida-rapida-en-estados-unidos.jpg" alt="comida">
        </div>

        <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">¿Hay algo que no te guste?</h1>
        </div>
        
        <div class=" w-screen flex justify-center">
            <h2 class=" p-5 text-lg w-1/2">Si encuentras algún <strong>plato que no te haga saltar de alegría</strong>, no te preocupes, <strong>no lo tomaremos como algo personal.</strong> ¡Dinos cuál es y <strong>lo eliminamos de la carta</strong> para que puedas disfrutar al máximo de nuestras <strong>deliciosas opciones!</strong></h2>
        </div>

        <div class="flex justify-center flex-col items-center mt-5">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Eston son los platos que tenemos:</h1>
            Aqui mostramos todos los platos ordenados por tipos.
        </div>



@endsection