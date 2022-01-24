@extends('layouts.app')

@section('content')
  <main>
    <div class="jumbotron"></div>

    <div class="current-series">
      <div class="container">

        <div class="button blue big" id="current-btn">current series</div>

        <div class="cards-container">
          @foreach ($comics as $comic)
          <div class="serie-card">

            <div class="image-box">
              <img src="{{$comic['thumb']}}</" alt="{{$comic['title']}}">
            </div>
        
            <h3>{{$comic['title']}}</h3>   
        
          </div> 
          @endforeach
        </div>

        <div class="button blue small">load more</div>

      </div>
    </div>
    <section class="buy-comics">
      <ul>
        <li>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
          <a href="#">digital comics</a>
        </li>
        <li>
          <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="dc merchandise">
          <a href="#">dc merchandise</a>
        </li>
        <li>
          <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscription">
          <a href="#">subscription</a>
        </li>
        <li>
          <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="comic shop locator">
          <a href="#">comic shop locator</a>
        </li>
        <li>
          <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc power visa">        
          <a href="#">dc power visa</a>
        </li>
      </ul>
    </section>

  </main>
@endsection

