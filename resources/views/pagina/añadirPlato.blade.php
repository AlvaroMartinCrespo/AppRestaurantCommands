@extends('layouts/pagina')

@section('contentPage')

    <div class="w-screen">
        <img class="object-none w-screen h-44" src="https://visitkent.com/wp-content/uploads/2017/10/ThinkstockPhotos-514369464.jpg" alt="comida">
    </div>

    <div class="flex flex-col justify-center items-center">

        <div class="bg-gray-300 p-5 w-screen flex justify-center flex-col items-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Ayudanos !</h1>
        </div>

        <div class=" text-center">
            <h2 class=" w-screen p-5 text-lg">Necesitamos expandir nuestra carta de comidas. <strong>Rellena este formulario</strong> con tu <strong>comida favorita</strong> y la añadiremos al Menú.</h2>
        </div>
        <div class="w-full mx-auto bg-white p-6 rounded-md shadow-md flex flex-col justify-center items-center">
            <h2 class="text-lg font-medium mb-4">Añadir nuevo plato</h2>
            <form class=" w-2/6">
                <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="nombre">
                    Nombre del plato
                </label>
                <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="nombre" name="nombre" type="text" placeholder="Ejemplo: Hamburguesa con queso">
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="imagen">
                    URL de la imagen
                </label>
                <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="imagen" name="imagen" type="url" placeholder="Ejemplo: https://ejemplo.com/imagen.jpg">
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="descripcion">
                    Descripción del plato
                </label>
                <textarea class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="descripcion" name="descripcion" rows="4" placeholder="Ejemplo: Deliciosa hamburguesa con carne de res, queso cheddar y verduras frescas"></textarea>
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="precio">
                    Precio del plato
                </label>
                <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" id="precio" name="precio" type="number" step="0.01" placeholder="Ejemplo: 10.99">
                </div>
                <div class="text-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md" type="submit">Añadir plato</button>
                </div>
            </form>
            </div>

    </div>

@endsection