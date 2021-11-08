<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top shadow p-4 mb-4 bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">Property Company</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{($title == "Home")?'active':''}}" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title == "Developer")?'active':''}}" href="{{ route('developers.index') }}" >Developer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title == "Project")?'active':''}}" href="{{ route('projects.index') }}" >Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title == "Contact")?'active':''}}" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>