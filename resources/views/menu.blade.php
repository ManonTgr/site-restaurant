@extends('base')
    <section>
      <nav>
        <ul>
              <li><a href="#">Acceuil</a></li>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Réservation</a></li>
              <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </section>
    <p> test </p>
    <br> 
    <p> test </p>
    <section>
  <h2>Menu</h2>
  @foreach ($categories as $categories)
  <div>
      <h3>{{$categories}}</h3>
      <ul class="plats">
          @foreach ($categorie->plats( as $plat)) 
          <li> 
            <img src="{{ asset(images/).
            $plat->fichier) }}" alt="{{
            $plat->titre}}"/>
            <span class="prix">{{ $plats->prix}}
              eur</span>
          </li>
          @endforeach
      </ul>
  </div>
  @endforeach
</section>
    <footer>
      <!-- TODO -->
    </footer>
  </body>
</html>
