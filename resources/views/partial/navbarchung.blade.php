<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('Event.index')}}">
      Event Cake</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            New Event Cake
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('Event.index')}}">View All Event Cake</a>
            <a class="dropdown-item" href="{{route('Event.create')}}">New  Event Cake </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
{{--  <div class="container">--}}
{{--    <a class="navbar-brand"--}}
{{--       href="{{route('teacher.index')}}"--}}
{{--    >--}}
{{--      Teacher</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
{{--            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--      <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--      <ul class="navbar-nav mr-auto">--}}
{{--        <li class="nav-item dropdown">--}}
{{--          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--             aria-haspopup="true" aria-expanded="false">--}}
{{--            New Teacher--}}
{{--          </a>--}}
{{--          <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--            <a class="dropdown-item"--}}
{{--               href="{{route('teacher.index')}}"--}}
{{--            >View All Teacher</a>--}}
{{--            <a class="dropdown-item"--}}
{{--               href="{{route('teacher.create')}}"--}}
{{--            >New Teacher</a>--}}
{{--          </div>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <div class="container">--}}
{{--    <a class="navbar-brand"--}}
{{--       href="{{route('student.index')}}"--}}
{{--    >--}}
{{--      Student</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
{{--            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--      <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--      <ul class="navbar-nav mr-auto">--}}
{{--        <li class="nav-item dropdown">--}}
{{--          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--             aria-haspopup="true" aria-expanded="false">--}}
{{--            New Student--}}
{{--          </a>--}}
{{--          <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--            <a class="dropdown-item"--}}
{{--               href="{{route('student.index')}}"--}}
{{--            >View All Student</a>--}}
{{--            <a class="dropdown-item"--}}
{{--               href="{{route('student.create')}}"--}}
{{--            >New Student</a>--}}
{{--          </div>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</nav>--}}
