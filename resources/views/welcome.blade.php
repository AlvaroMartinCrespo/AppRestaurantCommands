@extends('../layouts/plantilla')

@section('title', 'Home')

@section('content')

    <div class="flex justify-center ">
        <div class="w-1/2 h-auto">
            <img class="object-none h-screen"
                src="https://static-sevilla.abc.es/media/gurmesevilla/2012/01/comida-rapida-casera.jpg" alt="comida">
        </div>
        <div class="w-1/2 flex justify-center flex-col items-center p-5 h-screen m-4">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Elige
                y Pide</h1>
            <p class=" text-justify p-8">
                Podrás explorar nuestro <b>menú completo</b>, ver fotos de los platos, <b>descripciones detalladas</b>,
                precios y tus necesidades dietéticas. Una vez que hayas decidido lo que quieres ordenar, <b>podrás
                    seleccionar los elementos que deseas</b>, especificar los detalles de tu orden y, finalmente, <b>hacer
                    tu pago en línea de manera segura.</b>
            </p>
            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                href="{{ route('login') }}">Inicia Sesión</a>
            <span class="text-xs text-justify fixed bottom-0 p-8">
                Al hacer clic en el botón 'Iniciar sesión', aceptas los <a href="#" class=" text-cyan-600">términos y
                    condiciones</a> establecidos por esta plataforma. Estos términos y condiciones, junto con nuestra
                política de privacidad, rigen el uso de nuestro sitio web o aplicación y cualquier contenido, función,
                producto o servicio ofrecido en este.
            </span>
        </div>
    </div>

@endsection
