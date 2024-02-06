@extends('base')

@section('title', 'Accueil')

@section('content')
<h1>Découvrez les saveurs 
    <br>
    du Cameroun 
    <br>chez O CnAmO !
</h1>
<ul>
    @foreach ($actu as $actu)
        <li>{{ $actu->contenu }} ({{ $actu->date_publication }})</li>
    @endforeach
</ul>
@endsection
