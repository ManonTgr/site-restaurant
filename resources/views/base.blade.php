<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/app.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> {{ config('app.name') }} -@section('title')@endsection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        <div class="header-content">
            <div>
                <img src="Images/OCNAMO.png" alt="Chemin de randonnée au milieu des montagnes" title="Cliquez pour agrandir">
            </div><p class="titre"><i>~~ O CNAMO ~~</i></p>
            <nav>
                <ul>
                    
                    <div class="acceuil">
                    <li>
                        <a href="{{ route('main.home') }}">Accueil</a>
                    </li></div>
                    <div class="menu">
                    <li>
                        <a href="{{ route('main.menu') }}">Menu</a>
                    </li></div>
                    <div class="reservation">
                    <li>
                        <a href="{{ route('main.reservation.store') }}">Réservation</a>
                    </li></div>
                    <div class="contact">
                    <li>
                        <a href="{{ route('main.reservation.store') }}">Contact</a>
                    </li></div>
                </ul>
            </nav>
        </div>
    </header>
    
    
    @yield('content')
    <footer>
        <!-- TODO --> 
    </footer>
</body>
</html>