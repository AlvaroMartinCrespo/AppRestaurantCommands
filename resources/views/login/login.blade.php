@extends('../layouts/plantilla')

@section('title', 'Home')

@section('content')
    <div class="w-100 h-screen flex justify-center bg-slate-700">
        <div
            class=" max-w-xs h-[530px] m-5 p-8 mt-5 text-white flex flex-col justify-center items-center bg-black rounded-2xl w-1/3 ">
            <div>
                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            </div>
            <h1 class=" mb-5 text-xl mt-5">Inicio de Sesión</h1>
            <div class=" flex flex-col justify-center">
                <form class="flex flex-col" action="{{ route('inicia-sesion') }}" method="POST">
                    @csrf
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <div class="relative mb-3">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="JohnDoe@ejemplo.com" required>
                    </div>
                    <label for="contraseña"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                    <input type="password" name="password" id="contraseña"
                        class=" mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contraseña" required>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar
                        Sesión</button>
                </form>
            </div>
            <div>
                <hr class="mt-4 mb-4">
                <a href="{{ route('register') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrarse</a>
                <br> <br><br><br>

            </div>
        </div>
    </div>


@endsection
