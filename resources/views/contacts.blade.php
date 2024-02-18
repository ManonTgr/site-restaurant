
@extends('base')

@section('content')
<section class="pagecontact">
<h2>Formulaire de contact
</h2>
<br><br><br><br>
<ul>
    @foreach ($Contact as $contacts)
        <li>{{ $contacts->adresse }}</li>
        <li>({{ $contacts->numTel }})</li>
        <li>({{ $contacts->horaire }})</li>
    @endforeach
</ul>
</section>
@endsection
