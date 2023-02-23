@extends('layouts/pagina')

@section('contentPage')

    <div class="w-full">
        <img class="object-none w-full h-44" src="https://img2.rtve.es/imagenes/mejor-tortilla-patatas-casa-dani-bustamante/1606754179280.jpg" alt="comida">
    </div>

    <div class="bg-gray-300 p-5 w-full flex justify-center flex-col items-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Quienes Somos</h1>
    </div>

    <div class="w-full flex justify-center items-center flex-col">

        {{-- <div class=" w-75 rounded border flex justify-center items-center m-5">
            <img class=" h-16 " src="{{asset('images/noPhoto.webp')}}" alt="">
            <p>Descripcion</p>
        </div> --}}

        <div class=" w-4/6 rounded border flex justify-center items-center m-5">
            <img class="h-80" src="{{asset('images/piña.jpg')}}" alt="">
            <p class="p-5">
                Nuestros clientes pueden disfrutar de la experiencia única de escuchar música en vivo durante su visita, interpretada por el reconocido cantante Quevedo. Esta prestación de música en vivo añade un valor adicional a la calidad del servicio que ofrecemos, al proporcionar a nuestros clientes un mayor confort y una experiencia más memorable.
            </p>
            
        </div>

        <div class="w-full flex justify-center">
            <p class="text-justify w-3/4">Bienvenidos a nuestro restaurante, donde estamos comprometidos a brindarte la mejor experiencia gastronómica. Nos enorgullecemos de ofrecerte una amplia variedad de platos deliciosos, preparados con los ingredientes más frescos y de alta calidad.</p>
        </div>

        <div class=" w-4/6 rounded border flex justify-center items-center m-5">
            <p class="p-5">En nuestro equipo, contamos con un grupo de chefs experimentados y apasionados por la comida, que trabajan incansablemente para crear platos innovadores y deliciosos que satisfagan tus sentidos. Además, nuestro personal de servicio amable y atento está siempre a tu disposición para asegurarse de que tengas una experiencia agradable y satisfactoria.
            Nos esforzamos por ofrecer un ambiente cómodo y relajante, donde puedas disfrutar de una cena tranquila con amigos y familiares, una cena romántica con tu pareja o una comida rápida y deliciosa durante el almuerzo. Nuestro objetivo es hacerte sentir como en casa y que disfrutes de tu tiempo con nosotros.
            </p>
            <img class="h-80" src="https://pablonicolas.es/wp-content/uploads/2021/11/WhatsApp-Image-2021-11-22-at-12.34.53-PM.jpeg" alt="">
        </div>

        <div class="w-4/6">
            <p class="">Nos importa la calidad de los alimentos que servimos y por eso, utilizamos ingredientes frescos y locales siempre que es posible, para asegurarnos de que disfrutes de una comida deliciosa y saludable.

            Gracias por visitar nuestro restaurante, esperamos verte pronto y deleitarte con nuestros platos. ¡Buen provecho!</p>
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