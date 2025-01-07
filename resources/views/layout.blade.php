<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Calculadora de Amortização</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container-liquid">
        <header class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
            </a>
        </header>
    </div>
    <div class="conatiner">
        <main class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>    
    </div>
    <div class="container-liquid">
        <div class = "card - footer">
            <p class =" text - center py -4 "> Todos os direitos reservados a & copy; Copyright </p >
        </div>
    </div>
</body>

</html>