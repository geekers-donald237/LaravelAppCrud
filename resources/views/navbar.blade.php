<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel Web Framework For Artisan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 50%">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link btn p-2" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link btn btn-info p-2" href="{{ url('/create') }}">Create New Students</a>
          </ul>
        </div>
      </nav>

</div>
