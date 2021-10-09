
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}"><span>LOGO</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('inventory.create')}}">Add<span class="sr-only"></span></a>
      </li>
        <a class="nav-link" href="{{route('inventory.list')}}">Inventory<span class="sr-only"></span></a>
      </li>
      </li>
        <a class="nav-link" href="{{route('customer.create')}}">Registration<span class="sr-only"></span></a>
      </li>
      </li>
        <a class="nav-link" href="{{route('customer.login')}}">Login<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>