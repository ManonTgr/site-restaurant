 
@extends('base')

@php // pour integrer un tableau php car il ne peut pas etre ecrit directement dans le blade//

$heures = [

  // créneaux du midi
  '12:00:00' => '12:00',
  '12:30:00' => '12:30',
  '13:00:00' => '13:00',
  '13:30:00' => '13:30',

  // créneaux du soir

  '20:00:00' => '20:00',
  '20:30:00' => '20:30',
  '21:00:00' => '21:00',
  '21:30:00' => '21:30',
];
@endphp

@section('content')
<section>
    <h2>Réservation</h2>
    
  {{-- <div>
      @foreach ($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>  Permet d'afficher tout les messages d'erreur de la page qui ne s'affiche pas --}}

    <form action="{{ route('main.reservation.store')}}" method="post"> 
      @csrf
        <div>
          <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="" min="3" max="100" value ="{{ old('nom')}}" required>
          @error('nom')
        <div class="invalid-feedback"> {{ $message}}
        </div>

          @enderror <!-- texte sur une seule ligne-->

        </div>
        <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couverts" id="couverts" min="1" max="16"value ="{{ old('couverts')}}" required>
          @error('couverts')
            <div class="invalid-feedback">{{ $message}}</div>
          @enderror <!-- texte sur une seule ligne-->
        </div>
        <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
              <label for="heure">Heure</label>

            {{-- <input type="time" name="heure" id="heure" required> <!-- texte sur une seule ligne--> --}}
              <select name="heure" id="heure" required>

              {{-- créneau du midi --}}

              <option value=""></option>
           @foreach ($heures as $heure )
              <option value="{{ $heure }}"
             {{  old('heure') == $heure ? 'selected': ''}}> {{ $heure}} </option>
                  {{-- condiitons ? truc à afficher si c'est vrai, truc à afficher si c'est faux --}}
                  {{-- si l'utilisateur séléctionne une heure elle ne pourra pas être re séléctionner apres --}}
           @endforeach
              </select>
            @error('heure')
            <div class="invalid-feedback">{{ $message}}</div>
          @enderror
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" min="{{ date('Y-m-d')}}" value ="{{ old('jour')}}" required> 
            <!-- texte sur une seule ligne-->
               
          @error('jour')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
        </div>
        @enderror
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value ="{{ old('telephone')}}" placeholder="Format: 0600000000"> 
            
          @error('telephone')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
          </div>*
          @enderror
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="commentaire"></label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10">{{ old('commentaire') }}</textarea>
             <!-- texte sur une seule ligne-->
             @error('commentaire')
             <div class="invalid-feedback">{{ $message}}</div>
             @enderror
          </div>
          <div>
            <button type="submit"> Réserver</button>
    </form>
</section>
@endsection