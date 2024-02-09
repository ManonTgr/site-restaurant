@extends('base')

@section('title', 'Menu')

@section('content')
    <section class="menuforme">
        <h2>Menu</h2>
        @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie->nom }}</h3>
            <ul class="plats">
                @foreach ($categorie->plats() as $plat)
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