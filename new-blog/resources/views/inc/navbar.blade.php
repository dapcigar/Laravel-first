<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Play Thang!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName()==='home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link {{Request::route()->getName()==='about' ? 'active' : ''}}" href="{{route('about')}}">About</a>

          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName()==='contact'? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName()==='get-messages'? 'active' : ''}}" href="{{route('get-messages')}}">Contact Messages</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>