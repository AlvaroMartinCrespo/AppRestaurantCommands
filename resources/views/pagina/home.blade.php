@extends('layouts/pagina')

@section('contentPage')

    <div class="fixed bottom-0 right-0 p-4 rounded-full bg-slate-400 m-5">
            <div>
                <form action="{{route('enviarComanda')}}">
                    @csrf
                    <div id="carrito">
                        <img class=" cursor-pointer w-10" src="{{asset('images/carrito.png')}}" alt="">
                        <div id='contentCarrito' class=" flex justify-center items-center flex-col hidden absolute z-50 bottom-10 right-20 mt-2 py-2 w-auto bg-white rounded-lg shadow-xl">
                            <table class="table-auto">
                                {{-- Se llama a un for y en la vista se le introducen todos los elementos seleccionados que se almacenaran en una tabla --}}
                                <thead>
                                <tr>
                                    <th class="px-4 py-2">Imagen</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Precio</th>
                                    <th class="px-4 py-2">Cantidad</th>
                                    <th class="px-4 py-2">Eliminar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carrito as $item)
                                                                        <tr>
                                    <td class="border px-4 py-2">
                                    <img src="{{$item->ruta_imagen}}" alt="Producto" class="h-16 w-16 object-cover">
                                    </td>
                                    <td class="border px-4 py-2 text-center">{{$item->nombre}}</td>
                                    <td class="border px-4 py-2 text-center">{{$item->precio}}</td>
                                    <td class="border px-4 py-2 text-center">{{$item->cantidad}}</td>
                                    <td class="border px-4 py-2 text-center"><a class="rounded-full bg-slate-600 p-3" href="p-4">X</a></td>
                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="flex justify-center items-center p-4 bg-emerald-300 rounded mt-2">
                                <button>Enviar Comanda</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>

    <div class="flex justify-center flex-col items-center">
        <div class=" w-full h-60 bg-black">    
            <img class=" object-none w-full h-60" src="https://s1.1zoom.me/b5353/683/Fast_food_Hamburger_Vegetables_Bottle_530823_1920x1080.jpg" alt="comida">
        </div>

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Entrantes</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($entrantes as $entrante)
            <div class=" max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a class="w-full" href="#">
                <img class="rounded-t-lg w-full h-56 object-none" src="{{$entrante->ruta_imagen}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$entrante->comida}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$entrante->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$entrante->precio}} €</span>
                <a
                    href="{{route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $entrante->id])}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Primeros Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($primerPlato as $pm)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-56 object-none" src="{{$pm->ruta_imagen}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$pm->comida}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$pm->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$pm->precio}} €</span>
                <a
                    href="{{route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $pm->id])}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Segundos Platos</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($segundoPlato as $sp)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-56 object-none" src="{{$sp->ruta_imagen}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$sp->comida}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$sp->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$sp->precio}} €</span>
                <a
                    href="{{route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $sp->id])}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Añadir
                </a>
                </div>
            </div>
            </div>

            @endforeach
        </div>

                <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Postres</h1>
            <span></span>
        </div>

        <div class="grid grid-cols-3 gap-10 m-11">
            @foreach ($postres as $p)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-56 object-none" src="{{$p->ruta_imagen}}" alt="" />
            </a>
            <div class="p-5">
                <span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$p->comida}}
                </h5>
                </span>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$p->descripcion}}
                </p>
                <div class="flex gap-2 items-center">
                    <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{$p->precio}} €</span>
                <a
                    href="{{route('crearOrden', ['usuarioId' => auth()->user()->id, 'id' => $p->id])}}"
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