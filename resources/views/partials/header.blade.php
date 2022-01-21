<header class="container">

  <div class="logo">
    <a href="#">
    <img src="{{ asset('img/dc-logo.png') }}" alt="dc logo">
    </a>
  </div>

  <nav>
    <ul>

      @foreach (config('menu') as $link)
        <li>
          <a class="{{ (Route::currentRouteName() === $link['route']) ? 'active' : ''}}" href="#">{{ $link['text'] }}</a>
        </li>
      @endforeach
      
    </ul>
  </nav>
 
</header>