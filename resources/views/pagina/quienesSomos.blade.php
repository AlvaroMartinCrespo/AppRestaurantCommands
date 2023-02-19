@extends('layouts/pagina')

@section('contentPage')

        <div>    
            <h1>Quienes Somos</h1>

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