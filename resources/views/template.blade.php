<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Handball Club Planais</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-verydark justify-content-md-center justify-content-start">
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="nav-link" href="#"><img src="{{asset('../resources/img/logo.png')}}"></a>
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('actuality')}}">Actualités</a>
                </li>
                <li class="nav-item my-auto">
                    <a class="nav-link" href="{{route('club')}}">Le club</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop')}}">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mobileApp')}}">L'application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"><i class="far fa-user"></i> Se connecter</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="app">
        @yield('contenu')
    </div>

    <footer class="bg-verydark">
        <div class="row">
            <div class="col-lg">
                <a href="#" class="footer-link"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
            <div class="col-lg">
                <a class="no-link" href="#">Politique de confidentialité</a>
            </div>
            <div class="col-lg">
                <a class="no-link" href="#">Mention Légales</a>
            </div>
            <div class="col-lg">
                <a class="no-link" href="#">Règlement intérieur</a>
            </div>
            <div class="col-lg">
                <a href="#">Infos assurances</a>
            </div>
            <div class="col-lg">
                <a class="no-link" href="#">CGU/CGV</a>
            </div>
            <div class="col-lg">
                <a class="no-link" href="#"><i class="far fa-copyright"></i> 2021 - HBC Planais</a>
            </div>
        </div>
    </footer>

</body>
</html>
