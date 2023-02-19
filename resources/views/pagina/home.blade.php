@extends('layouts/pagina')

@section('contentPage')

    <div class="flex justify-center flex-col items-center">
        <div class=" w-screen h-60 bg-black">    
            <img class=" object-none w-screen h-60" src="https://s1.1zoom.me/b5353/683/Fast_food_Hamburger_Vegetables_Bottle_530823_1920x1080.jpg" alt="comida">
        </div>

        <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Entrantes</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($comidas as $comida)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('images/noPhoto.webp')}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$comida->nombre}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$comida->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$comida->precio}} €</span>
                <a
                    href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Primeros Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($comidas as $comida)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('images/noPhoto.webp')}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$comida->nombre}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$comida->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$comida->precio}} €</span>
                <a
                    href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Segundos Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($comidas as $comida)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('images/noPhoto.webp')}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$comida->nombre}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$comida->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$comida->precio}} €</span>
                <a
                    href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Postres</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($comidas as $comida)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('images/noPhoto.webp')}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$comida->nombre}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$comida->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$comida->precio}} €</span>
                <a
                    href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

    </div>



@endsection