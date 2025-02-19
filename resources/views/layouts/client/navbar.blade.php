
@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light navbar-bg-blue" 
    style="
        position: sticky;
        top: 0;
">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-burger">
            <i class="fas fa-bars"></i>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-user"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/user/profile">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span> {{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                    
                </li>
            </ul>
        </div>
    </div>
</nav>

@endsection