
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('admin.dashboard')}}"><span>LOGO</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.logout')}}">Log Out<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>