@extends('layouts/pagina')

@section('contentPage')
    <div class="flex justify-center flex-col items-center">
        <div class=" w-full h-60 bg-black">
            <img class=" object-none w-full h-60"
                src="https://s1.1zoom.me/b5353/683/Fast_food_Hamburger_Vegetables_Bottle_530823_1920x1080.jpg" alt="comida">
        </div>

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Entrantes</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($entrantes as $entrante)
                <div
                    class=" max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full">
                        <img class="rounded-t-lg w-full h-56 object-none" src="{{ $entrante->ruta_imagen }}"
                            alt="" />
                    </div>
                    <div class="p-5">
                        <span>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $entrante->comida }}
                            </h5>
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $entrante->descripcion }}
                        </p>
                        <div class="flex gap-2 items-center">
                            <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{ $entrante->precio }}
                                €</span>
                            @if (auth()->user()->admin)
                            @else
                                <a href="{{ route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $entrante->id]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Añadir
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Primeros Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($primerPlato as $pm)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-56 object-none" src="{{ $pm->ruta_imagen }}" alt="" />
                    </a>
                    <div class="p-5">
                        <span>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $pm->comida }}
                            </h5>
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $pm->descripcion }}
                        </p>
                        <div class="flex gap-2 items-center">
                            <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{ $pm->precio }}
                                €</span>
                            @if (auth()->user()->admin)
                            @else
                                <a href="{{ route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $pm->id]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Añadir
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Segundos Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($segundoPlato as $sp)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-56 object-none" src="{{ $sp->ruta_imagen }}" alt="" />
                    </a>
                    <div class="p-5">
                        <span>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $sp->comida }}
                            </h5>
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $sp->descripcion }}
                        </p>
                        <div class="flex gap-2 items-center">
                            <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{ $sp->precio }}
                                €</span>
                            @if (auth()->user()->admin)
                            @else
                                <a href="{{ route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $sp->id]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Añadir
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Postres</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($postres as $p)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-56 object-none" src="{{ $p->ruta_imagen }}" alt="" />
                    </a>
                    <div class="p-5">
                        <span>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $p->comida }}
                            </h5>
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $p->descripcion }}
                        </p>
                        <div class="flex gap-2 items-center">
                            <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{ $p->precio }}
                                €</span>
                            @if (auth()->user()->admin)
                            @else
                                <a href="{{ route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $p->id]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Añadir
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

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
