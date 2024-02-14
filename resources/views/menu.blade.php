@extends('base')

@section('title', 'Menu')

@section('content')
    <section class="menuforme">
        <br><br><br>
        <br>
        <br>
        <h2>Menu</h2>
        @foreach ($categories as $categorie)
        <div class="categ">
            <br>
            <h3>{{ $categorie->nom }}</h3>
            <br><br>
            <ul class="plats"><br>
                @foreach ($categorie->plats() as $plat)
                <br><br>
                <li>
                    <img src="{{ asset('images/'.$plat->fichier) }}" alt="{{ $plat->nom }}" />
                    <h4>{{ $plat->nom }}</h4>
                    <span class="prix">{{ $plat->prix }} euros</span>
                    
                    <ul>
                         <h4>{{ $plat->description }}</h4>
                    </ul>
                    <ul>
                        @foreach ($plat->etiquettes() as $etiquette)
                            <li>{{ $etiquette->contenu }} ({{ $etiquette->nom }})</li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </section>
@endsection