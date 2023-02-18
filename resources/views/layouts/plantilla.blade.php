<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    @yield('content')
</body>
<script>

    listerners();

    function listerners(){
 
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
    function mostrarPerfil(){
        const popup = document.querySelector("#divPerfil");
        popup.classList.remove('hidden');
    }

    /**
     * Se le añade al popup la clase hidden por lo tanto desaparece
    */
    function ocultarPerfil(e){
        const popup = document.querySelector("#divPerfil");
        if(e.target.id !== 'buttonPerfil'){
            popup.classList.add('hidden');
        }
    }


</script>
</html>