<aside class="h-100">
    <nav class="navbar navbar-expand navbar-dark bg-dark h-100 d-flex flex-column py-3">
          {{-- CHARACTERS LINK --}}
          <div class="collapse navbar-collapse w-100 my-2">
            <ul class="navbar-nav w-100">
              <li class="nav-item dropdown w-100">
                <button class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                  Characters
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{route('admin.characters.index')}}">See all characters</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.characters.create')}}">Add new character</a></li>
                </ul>
              </li>
            </ul>
          </div>
          {{-- RACES LINK --}}
          <div class="collapse navbar-collapse w-100 my-2">
            <ul class="navbar-nav w-100">
              <li class="nav-item dropdown w-100">
                <button class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                  Races
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{route('admin.races.index')}}">See all races</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.races.create')}}">Add new race</a></li>
                </ul>
              </li>
            </ul>
          </div>
          {{-- SKILLS LINK --}}
          <div class="collapse navbar-collapse w-100 my-2">
            <ul class="navbar-nav w-100">
              <li class="nav-item dropdown w-100">
                <button class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                    Skills
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{route('admin.skills.index')}}">See all skills</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.skills.create')}}">Add new skill</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>
</aside>
