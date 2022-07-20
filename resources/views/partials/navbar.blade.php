<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="{{ route('/') }}">
        <img src="{{ url('images/logo2.png') }}" alt="" width="60"> RentCar
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li>
                <a href="{{ route('daftar') }}" class="nav-link {{ Request::is('daftar') ? 'active' : '' }}"><i class="bi bi-list"></i> Daftar Mobil</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mr-2">
        @auth
            <li class="navbar-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{ Request::is('profil*') ? 'active' : '' }}" id="navDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->username }}</a>
            <ul class="dropdown-menu" aria-labelledby="navDrop">
                <li>
                    <a href="{{ route('profil.index') }}" class="dropdown-item"><i class="mr-2 bi bi-person-fill"></i>Profile</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                @can('rental')
                    <li>
                        <a href="{{ route('toko.index') }}" class="dropdown-item"><i class="mr-2 bi bi-house-fill"></i>Store</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                @endcan
                @can('admin')
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="dropdown-item"><i class="mr-2 bi bi-shield-fill-exclamation"></i>Administrator</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                @endcan
                <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">
                    <i class="mr-2 bi bi-box-arrow-right"></i>Log Out
                    </button>
                </form>
                </li>
            </ul>
            </li>
        @else
            <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login') }}"><i class="mr-2 bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        @endauth
        </ul>
    </div>
    </div>
</nav>
