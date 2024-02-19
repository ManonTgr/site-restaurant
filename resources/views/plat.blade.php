@extends('base')

@section('content')
    <section>
        <div class="pageplat">
            <img src="{{ asset('images/' . $plat->fichier) }}" alt="{{ $plat->nom }}" />
            <h2>{{ $plat->nom }}</h2>
            <span class="prix">{{ $plat->prix }} euros</span>
            <ul class="lienplat">
                @foreach ($plat->etiquettes() as $etiquette)
                    <li>{{ $etiquette->nom }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
