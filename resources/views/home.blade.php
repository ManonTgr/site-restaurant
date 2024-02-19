@extends('base')

<section class="home">
    @section('title', 'Accueil')

    @section('content')

        <h1>Découvrez les saveurs
            <br>
            du Cameroun
            <br>chez O CnAmO !
        </h1>
        <br><br><br>
    </section>
    <div class="espace"></div>
    <section class="actualite">
        <ul>
            @foreach ($actus as $actu)
                <div class="actualite-item">
                    <p>{{ $actu->contenu }}</p>
                    <img src="images/actualite.jpg">
                    <p class="datep">{{ $actu->date_publication }}</p>
            @endforeach
        </ul>

    </section><br><br><br><br><br>
@endsection
