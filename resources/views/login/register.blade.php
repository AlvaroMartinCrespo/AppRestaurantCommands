@extends('../layouts/plantilla')

@section('title', 'Home')

@section('content')
 <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
    <h1 class="text-center font-bold text-2xl mb-5">Registro</h1>
    <form action="{{route('validar-registro')}}">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre:</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese su nombre">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="correo">Correo electrónico:</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="correo" type="email" placeholder="Ingrese su correo electrónico">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="password">Contraseña:</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Ingrese su contraseña">
      </div>
      <div class="flex items-center justify-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Registrarse
        </button>
      </div>
    </form>
  </div>
@endsection