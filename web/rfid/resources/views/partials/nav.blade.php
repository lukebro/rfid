<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item">
        <span class="icon">
          <i class="fa fa-id-card"></i>
        </span>
        <span>&nbsp;RFID Scanner <strong>5k</strong></span>
      </a>
      @if (Auth::check())
        <a href="{{ route('dashboard') }}" class="nav-item is-tab {{ Request::is('dashboard*') ? 'is-active' : null }}">Dashboard</a>
        <a href="{{ route('statistics') }}" class="nav-item is-tab {{ Request::is('statistics*') ? 'is-active' : null }}">Statistics</a>
        <a href="{{ route('captures') }}" class="nav-item is-tab {{ Request::is('captures*') ? 'is-active' : null }}">Captures</a>
      @endif
    </div>

    @if (Auth::check())
      <div class="nav-right nav-menu">
        <span class="nav-item">
          <figure class="image is-16x16" style="margin-right: 8px;">
            <img src="{{ asset('images/puppy.jpg') }}">
          </figure>
          {{ Auth::user()->username }}<small>&nbsp;&nbsp;<strong>{{ Auth::user()->number }}</strong></small>
        </span>
        <a href="{{ route('logout') }}" class="nav-item is-tab">Logout</a>
      </div>
    @else
      <div class="nav-right">
        <a href="{{ route('login') }}"class="nav-item is-tab">Login</a>
        <a href="{{ route('register') }}" class="nav-item is-tab">Register</a>
      </div>
    @endif
  </div>
</nav>
