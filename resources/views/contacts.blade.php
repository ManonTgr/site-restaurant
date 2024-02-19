
@extends('base')

@section('content')
<section class="pagecontact">
    <br><br>
<h2 class="contacttitre">Formulaire de contact
</h2>
<br><br>
<ul>
    @foreach ($Contact as $contacts)
        <li>{{ $contacts->adresse }}</li>
        <br>
        <li>{{ $contacts->numTel }}</li>
        <br>
        <li>{{ $contacts->horaire }}</li>
        
    @endforeach
    <br><br>
    <img src="/images/map.png" class="map">
</ul>
</section>
@endsection
