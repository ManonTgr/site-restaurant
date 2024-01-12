<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"defer></script>

  </head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('main.home') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('main.menu') }}">Menu</a>
                </li>
            </ul>
        </nav>
    </header>
*/test/*

    <header>
    <div class="float">
      <div>
        <a href="menu.html"><img src="../images/O CNAMO(3).png" alt="Chemin de randonnée au milieu des montagnes"
            title="Cliquez pour agrandir"></a>
      </div>
      <div>
        <h2>O Cnamo </h2>
      </div>

      <nav>
        <div class="profil">
        <ul>
          <li class="menu-deroulant">
            <a href="#">Services</a>
            <ul class="sous-menu">
              <li><a href="#">Menu</a></li>
              <li><a href="#">Reservation</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </li>
        </ul>
        </div>
      </nav>
    </div>

  </header>
    @yield('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <footer>
        <!-- TODO -->
    </footer>
</body>
</html>