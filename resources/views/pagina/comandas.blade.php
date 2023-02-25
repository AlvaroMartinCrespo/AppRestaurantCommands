@extends('layouts/pagina')

@section('contentPage')
    <div class="w-full">
        <img class=" object-none w-full h-44"
            src="https://carbonell-oliveoil.com/themes/user/site/default/asset/img/blog/interior_9.jpg" alt="comida">
    </div>

    {{-- Si es administrador --}}
    @if (auth()->user()->admin)
        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Comandas
            </h1>
        </div>

        <div class=" flex justify-center items-center">
            <a href="{{ route('eliminarComandas') }}" class=" p-4 bg-teal-400 rounded m-5">Limpiar Comandas</a>
        </div>


        <div class=" grid grid-cols-3 m-5 gap-6 justify-items-center">

            @foreach ($datos as $clave => $valor)
                {{-- {{ dd($datos) }} --}}
                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg hover:shadow-2xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Mesa {{ $clave }}
                        </h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

                            @foreach ($valor as $comida)
                                {{-- {{ dd($comida) }} --}}
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="{{ $comida['ruta_imagen'] }}"
                                                alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                {{ $comida['nombre'] }}
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            {{ $comida['precio'] }}€
                                        </div>
                                        <a href="{{ route('servir', ['id' => $comida['idOrden']]) }}"
                                            class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Servir</a>
                                    </div>

                                    @if ($comida['servida'])
                                        <div class="flex justify-center gap-4 items-center text-white">
                                            <p class="">
                                            <div class="bg-green-500 rounded-full w-3 h-3"></div>Servido</p>
                                        </div>
                                    @else
                                        <div class="flex justify-center gap-4 items-center text-white">
                                            <p class="">
                                            <div class="bg-red-500 rounded-full w-3 h-3"></div>No servido</p>
                                        </div>
                                    @endif


                                </li>
                            @endforeach
                            @if (reset($datos)[0]['confirmada'])
                                <div class="flex justify-center gap-4 items-center text-white">
                                    <p class="mt-5 mb-5 ">
                                    <div class="bg-green-500 rounded-full w-4 h-4"></div>Enviada</p>
                                </div>
                            @else
                                <div class="flex justify-center gap-4 items-center text-white">
                                    <p class="mt-5 mb-5 ">
                                    <div class="bg-red-500 rounded-full w-4 h-4"></div>No enviada</p>
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Si es usuario normal --}}
    @else
        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Tu Comanda
            </h1>
        </div>
        <div class="flex justify-center items-center h-screen m-5">
            <div
                class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg hover:shadow-2xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @if (!empty($carritoUsuario))
                            @foreach ($carritoUsuario as $plato)
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="{{ $plato['imagen'] }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                {{ $plato['nombre'] }}
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            {{ $plato['precio'] }}€
                                        </div>
                                        <div class="text-white p-2 bg-slate-500 rounded hover:bg-slate-600">
                                            <a
                                                href="{{ route('eliminarPlatoComanda', ['idComanda' => $plato['idOrden'], 'idPlato' => $plato['id']]) }}">Eliminar</a>
                                        </div>
                                    </div>
                                    @if ($plato['servida'])
                                        <div class="flex justify-center gap-4 items-center text-white">
                                            <p class="">
                                            <div class="bg-green-500 rounded-full w-3 h-3"></div>Servido</p>
                                        </div>
                                    @else
                                        <div class="flex justify-center gap-4 items-center text-white">
                                            <p class="">
                                            <div class="bg-red-500 rounded-full w-3 h-3"></div>No servido</p>
                                        </div>
                                    @endif

                                </li>
                            @endforeach
                            <div class="flex justify-center gap-4 items-center">
                                <a href="{{ route('enviarOrden', ['id' => $carritoUsuario[0]['idOrden']]) }}"
                                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4 mb-4">Enviar</a>
                            </div>

                            @if ($carritoUsuario[0]['confirmada'])
                                <div class="flex justify-center gap-4 items-center text-white">
                                    <p class="mt-5 mb-5 ">
                                    <div class="bg-green-500 rounded-full w-4 h-4"></div>Enviada</p>
                                </div>
                            @else
                                <div class="flex justify-center gap-4 items-center text-white">
                                    <p class="mt-5 mb-5 ">
                                    <div class="bg-red-500 rounded-full w-4 h-4"></div>No enviada</p>
                                </div>
                            @endif
                        @endif



                    </ul>
                </div>
            </div>
        </div>
    @endif








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
