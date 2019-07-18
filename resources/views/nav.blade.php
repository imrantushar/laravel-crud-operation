<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
      <a class="navbar-brand" href="#">My Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/students/create') }}">Add Student </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/students') }}">Students </a>
        </li>
      </ul>
      </div>
    </div>
    </nav>