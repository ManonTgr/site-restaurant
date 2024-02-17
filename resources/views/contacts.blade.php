@extends('base')

@section('content')
<h1>Formulaire de contact
</h1>
<ul>
    @foreach ($Contact as $contacts)
        <li>{{ $contacts->adresse }}</li>
        <li>({{ $contacts->numTel }})</li>
    @endforeach
</ul>
@endsection