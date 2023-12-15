<header id="admin-header" class="bg-dark">
    <nav class="d-flex justify-content-between px-3">
        <button class="btn btn-light"><a href="{{ route('dashboard')}}" class="navbar-brand">Home <i class="fa-solid fa-house fa-flip"></i></a></button>
        <form class="form-inline" method="POST" action="{{ route('logout')}}">
            @csrf
          <button class="btn btn-light" type="submit">Logout</button>
        </form>
      </nav>
</header>
