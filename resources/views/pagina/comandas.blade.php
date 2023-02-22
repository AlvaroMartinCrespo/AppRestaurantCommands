@extends('layouts/pagina')

@section('contentPage')

        <div class="w-screen">
            <img class=" object-none w-screen h-44" src="https://carbonell-oliveoil.com/themes/user/site/default/asset/img/blog/interior_9.jpg" alt="comida">
        </div>

        <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Comandas</h1>
        </div>

        <div class=" flex justify-center items-center">
            <a href="{{route('eliminarComandas')}}" class=" p-4 bg-teal-400 rounded m-5">Limpiar Comandas</a>
        </div>


        <div class=" grid grid-cols-3 m-5 gap-6 justify-items-center">
            {{-- for con cada comanda que es como esta --}}

@foreach ($datos as $clave => $valor)

<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg hover:shadow-2xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Mesa {{ $clave }}</h5>
   </div>
      <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

            @foreach ($valor as $comida)
 
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="{{$comida->ruta_imagen}}" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{$comida->nombre}}
                        </p>
                        {{-- <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            {{$comida->precio}}
                        </p> --}}
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{$comida->precio}}€
                    </div>
                </div>
            </li>

            @endforeach

            <li>
                Total:
            </li>

        </ul>
   </div>
</div> 
    
@endforeach



        </div>


    <footer class=" bottom-0 bg-gray-800 text-white mt-12 px-4 py-8 lg:px-16">
    <div class="flex flex-col lg:flex-row lg:justify-between">
        <div class="mb-4 lg:mb-0">
        <h3 class="text-2xl font-bold mb-2">Elige y Pide.</h3>
        <p class="text-sm">Disfruta de los mejores platos.</p>
        </div>
        <div class="flex flex-col lg:flex-row lg:items-center">
        <nav class="mb-4 lg:mb-0 lg:mr-8">
            <ul class="flex flex-col lg:flex-row lg:gap-8">
            <li><a href="#" class="text-sm">Inicio</a></li>
            <li><a href="#" class="text-sm">Añadir Plato</a></li>
            <li><a href="#" class="text-sm">Eliminar Plato</a></li>
            <li><a href="#" class="text-sm">Quienes Somos</a></li>
            </ul>
        </nav>
        <div class="flex items-center">
            <p class="text-sm mr-2">Síguenos en:</p>
            <ul class="flex gap-4">
            <li><a href="#"><i class="fab fa-facebook-f text-sm">Instagram</i></a></li>
            <li><a href="#"><i class="fab fa-instagram text-sm">Twitter</i></a></li>
            <li><a href="#"><i class="fab fa-twitter text-sm">Facebook</i></a></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="border-t border-gray-700 mt-8 pt-4 text-sm text-center lg:text-left">
        <p>&copy; 2023 Elige y Pide. Todos los derechos reservados.</p>
    </div>
    </footer>

@endsection