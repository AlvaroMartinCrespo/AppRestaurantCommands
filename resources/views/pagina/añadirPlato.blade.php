@extends('layouts/pagina')

@section('contentPage')
    <div class="w-full">
        <img class="object-none w-full h-44"
            src="https://visitkent.com/wp-content/uploads/2017/10/ThinkstockPhotos-514369464.jpg" alt="comida">
    </div>

    <div class="flex flex-col justify-center items-center">

        <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Ayudanos !</h1>
        </div>

        <div class=" text-center">
            <h2 class=" w-full p-5 text-lg">Necesitamos expandir nuestra carta de comidas. <strong>Rellena este
                    formulario</strong> con tu <strong>comida favorita</strong> y la añadiremos al Menú.</h2>
        </div>
        <div class="w-full mx-auto bg-white p-6 rounded-md shadow-md flex flex-col justify-center items-center">
            <h2 class="text-lg font-medium mb-4">Añadir nuevo plato</h2>
            <form action="{{ route('crearComida') }}" class=" w-2/6">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="nombre">
                        Nombre del plato
                    </label>
                    <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        id="nombre" name="nombre" type="text" placeholder="Ejemplo: Hamburguesa con queso" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="imagen">
                        URL de la imagen
                    </label>
                    <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        id="imagen" name="imagen" type="text" placeholder="Ejemplo: https://ejemplo.com/imagen.jpg"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="descripcion">
                        Descripción del plato
                    </label>
                    <textarea class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        id="descripcion" name="descripcion" rows="4"
                        placeholder="Ejemplo: Deliciosa hamburguesa con carne de res, queso cheddar y verduras frescas" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="precio">
                        Precio del plato
                    </label>
                    <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        id="precio" name="precio" type="number" step="0.01" placeholder="Ejemplo: 10.99" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="nombre">
                        Tipo de Plato
                    </label>
                    <select class="w-full text-center mb-4" name="tipoComida" id="tipoComida">
                        <option value="1">Entrante</option>
                        <option value="2">Primer Plato</option>
                        <option value="3">Segundo Plato</option>
                        <option value="4">Postre</option>
                    </select>
                    {{-- <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        id="nombre" name="nombre" type="select" placeholder="Ejemplo: Hamburguesa con queso" required> --}}
                </div>
                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md"
                        type="submit">Añadir plato</button>
                </div>

            </form>
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
