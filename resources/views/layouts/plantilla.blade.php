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
    const button = document.querySelector("button");
    const popup = document.querySelector(".absolute");

    // Mostrar la ventana emergente al hacer hover sobre el botón
    button.addEventListener("click", () => {
        popup.classList.remove("hidden");
    });

    // Ocultar la ventana emergente al sacar el cursor del botón
    button.addEventListener("blur", () => {
        popup.classList.add("hidden");
    });
</script>
</html>