<nav class="navbar navbar-expand-md navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
      <li class="nav-item {{ Request::is('contact/messages') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('get-messages') }}">See messages</a>
      </li>
    </ul>
    
  </div>
</nav>