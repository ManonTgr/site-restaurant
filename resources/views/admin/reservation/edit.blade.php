@extends('../../base')

@section('title','Admin - Réservation -Edit')

@section('content')
<section class="reservation-container">
  <div class="reservation-section">
    <h2>Admin - Réservation - Edit</h2>
    
  {{-- <div>
      @foreach ($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>  Permet d'afficher tout les messages d'erreur de la page qui ne s'affiche pas --}}

    <form action="{{ route('admin.reservation.update', ['id'=>$reservation->id])}}" method="post"> 
      @csrf
      @method('PUT')
        <div>
          <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="" min="3" max="100" value ="{{ old('nom',$reservation->nom)}}" not-required style="color: black;">
          @error('nom')
        <div class="invalid-feedback"> {{ $message}}
        </div>

          @enderror <!-- texte sur une seule ligne-->

        </div>
        <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couverts" id="couverts" min="1" max="16"value ="{{ old('couverts',$reservation->couvert)}}"  not-required style="color: black;">
          @error('couverts')
            <div class="invalid-feedback">{{ $message}}</div>
          @enderror <!-- texte sur une seule ligne-->
        </div>
        <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
              <label for="heure">Heure</label>

            {{-- <input type="time" name="heure" id="heure" not-required> <!-- texte sur une seule ligne--> --}}
              <select name="heure" id="heure" not-required style="color: black;">
              {{-- créneau du midi --}}
              <option value=""></option>
           @foreach ($heures as $heure )
              <option value="{{ $heure }}"
             {{  old('heure') == $heure.':00' ? 'selected': ''}}> {{ $heure}} </option>
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
            <input type="date" name="jour" id="jour" min="{{ date('Y-m-d')}}" value ="{{ old('jour')}}" not-required style="color: black;"> 
            <!-- texte sur une seule ligne-->
               
          @error('jour')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
        </div>
        @enderror
          </div>
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value ="{{ old('telephone')}}" placeholder="Format: 0600000000" style="color: black;"> 
            
          @error('telephone')<div class="invalid-feedback">{{ $message}}</div><!-- texte sur une seule ligne-->
          </div>*
          @enderror
          <div>
            <!--  <textarea name="" id="" cols="" rows="10"></textarea>--> <!-- texte sur plusieurs lignes-->
            <label for="commentaire"></label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10" style="color: black;">{{ old('commentaire') }}</textarea>
             <!-- texte sur une seule ligne-->
             @error('commentaire')
             <div class="invalid-feedback">{{ $message}}</div>
             @enderror
          </div>
          <div>
            <button type="submit"> Réserver</button>
    </form>
          </div>
</section>
@endsection