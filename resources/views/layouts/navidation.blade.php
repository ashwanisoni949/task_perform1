<div class="container text-center justify-content-center">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark p-2 text-center">
        <a class="navbar-brand" href="{{ route('form-industry') }}">industry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route('category-form') }}">category</a>
            <a class="nav-item nav-link" href="{{ route('primary-form') }}">Primary Event</a>
            <a class="nav-item nav-link" href="{{ route('show-primary') }}">Show Primary List</a>
          </div>
        </div>
        <div class="float-end me-3 text-light" style="text-decoration:none;">
          @if(!@empty(Auth::user()->name))
               <p class="text-light">{{ Auth::user()->name }}</p>
          @endif
        
            <a href="{{ route('logout') }}" class="text-light" style="text-decoration: none">logout</a>
        </div>
      </nav>
</div>
