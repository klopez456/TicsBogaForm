<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOGA</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @livewireStyles

        <!-- Bootstrap CSS File -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url("Imgs/fondoBoga6.png");
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover; 
            }
            b{
                color: #fff;
            }
        </style>
    </head>
    <body class="antialiased">
        <livewire:form-component />
        <script src="js/bootstrap.bundle.min.js"></script> 
        @livewireScripts
    </body>
</html>
