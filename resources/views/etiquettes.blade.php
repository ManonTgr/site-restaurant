@extends('base')

    @section('title', 'Accueil')

@section('content')
<h1>Découvrez les saveurs 
    <br>
    du Cameroun 
    <br>chez O CnAmO !
</h1>
<ul>
    @foreach ($etiquettes as $etiquette)
        <li>{{ $etiquette->contenu }} ({{ $etiquette->nom }})</li>
    @endforeach
</ul>
@endsection
</section>