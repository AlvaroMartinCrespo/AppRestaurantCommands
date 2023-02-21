@extends('layouts/pagina')

@section('contentPage')

        <div>    
            <h1>Aqui se mostraran las ordenes de la tabla ordenes junto con la de la tabla ordenes-comida</h1>
        </div>


        <div class=" grid grid-cols-3 m-5">
            {{-- for con cada comanda que es como esta --}}

<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg hover:shadow-2xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Mesa 1</h5>
   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            {{-- en otro for insertamos cada li --}}
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Plato 1
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            descripcion 1
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $precio
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Plato 1
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            descripcion 1
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $precio
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Plato 1
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            descripcion 1
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $precio
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Plato 1
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            descripcion 1
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $precio
                    </div>
                </div>
            </li>
            <li class="pt-3 pb-0 sm:pt-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Plato 1
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            descripcion 1
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        $precio
                    </div>
                </div>
            </li>
        </ul>
   </div>
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