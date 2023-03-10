@extends('layouts/pagina')

@section('contentPage')
    <div class="w-full">
        <img class=" object-none w-full h-44"
            src="https://www.crearmas.com/wp-content/uploads/2018/11/el-consumo-de-comida-rapida-en-estados-unidos.jpg"
            alt="comida">
    </div>

    <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">¿Hay algo
            que no te guste?</h1>
    </div>

    <div class=" w-full flex justify-center">
        <h2 class=" p-5 text-lg w-1/2">Si encuentras algún <strong>plato que no te haga saltar de alegría</strong>, no te
            preocupes, <strong>no lo tomaremos como algo personal.</strong> ¡Dinos cuál es y <strong>lo eliminamos de la
                carta</strong> para que puedas disfrutar al máximo de nuestras <strong>deliciosas opciones!</strong></h2>
    </div>

    <div class="flex justify-center flex-col items-center mt-5">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Eston son
            los platos que tenemos:</h1>
    </div>

    <div class="grid grid-cols-3 gap-10 w-full justify-items-center items-center mt-11">

        @foreach ($comidas as $comida)
            <form action="{{ route('eliminarComida', ['id' => $comida->id]) }}" method="get">
                <input type="hidden" name="id" value="{{ $comida->id }}">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-56 object-none" src="{{ $comida->ruta_imagen }}" alt="" />
                    </a>
                    <div class="p-5">
                        <span>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $comida->nombre }}
                            </h5>
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $comida->descripcion }}
                        </p>
                        <div class="flex gap-2 items-center">
                            <span class="font-bold tracking-tight text-gray-900 dark:text-white">{{ $comida->precio }}
                                €</span>
                            <button type="submit"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
