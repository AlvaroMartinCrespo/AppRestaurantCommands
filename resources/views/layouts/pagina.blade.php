@extends('layouts/plantilla')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col h-screen">
        <nav class="bg-gray-800">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                alt="Workflow">
                        </div>
                        <div class="md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ route('home') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                                @if (auth()->user()->admin)
                                    <a href="{{ route('comandas') }}"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Comandas</a>
                                @else
                                    <a href="{{ route('comandas') }}"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Comanda</a>
                                @endif

                                <a href="{{ route('añadirPlato') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Añadir
                                    Platos</a>
                                <a href="{{ route('eliminarPlato') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Eliminar
                                    Platos</a>
                                <a href="{{ route('quienesSomos') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quienes
                                    Somos</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <div class="relative inline-block">
                                <button id="buttonPerfil" type="button" class="focus:outline-none">
                                    <div class="inline-flex items-center">
                                        @if (auth()->user()->admin)
                                            <img class="w-10 h-10 rounded-full"
                                                src="https://i.pinimg.com/236x/e5/80/21/e58021120b62c45d0822c4b0aadedcce.jpg"
                                                alt="Avatar" />
                                        @else
                                            <img class="w-10 h-10 rounded-full" src="{{ asset('images/noPhoto.webp') }}"
                                                alt="Avatar" />
                                        @endif

                                    </div>
                                </button>
                                <div id="divPerfil"
                                    class=" flex justify-center items-center flex-col hidden absolute z-50 top-7 right-0 mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
                                    <span class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                        @if (auth()->check())
                                            <p>{{ auth()->user()->name }}</p>
                                        @endif
                                    </span>
                                    <span class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                        <p>Mesa {{ auth()->user()->id }}</p>
                                    </span>
                                    <button id="logOut" type="submit"
                                        class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Cerrar
                                        sesión</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        @yield('contentPage')

    </div>
    <script>
        listerners();

        function listerners() {

            const carrito = document.querySelector('#carrito');
            const button = document.querySelector("button");
            const popup = document.querySelector("#divPerfil");
            const body = document.querySelector('body')

            // Mostrar la ventana emergente al hacer hover sobre el botón
            button.addEventListener("click", mostrarPerfil, false);

            // Ocultar la ventana emergente al sacar el cursor del botón
            body.addEventListener("click", ocultarPerfil, true);

        }


        //Funciones para controlar que aparezca y desaparezca la ventana flotando de perfil

        /**
         * Se le elimina la clase hidden por lo tanto aparece.
         */
        function mostrarPerfil() {
            const popup = document.querySelector("#divPerfil");
            popup.classList.remove('hidden');
        }

        /**
         * Se le añade al popup la clase hidden por lo tanto desaparece
         */
        function ocultarPerfil(e) {
            const popup = document.querySelector("#divPerfil");
            if (e.target.id !== 'buttonPerfil') {
                popup.classList.add('hidden');
            }
        }
    </script>



@endsection
