<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light fixed-top navCustom transition border">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center ps-3" href="{{ route('home') }}">
            <img src="{{ asset('img/Logo.png') }}" alt="Logo" height="70" class="me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ps-5" id="navbarSupportedContent">
            <ul class="navbar-nav ps-5 me-5 ms-auto mb-2 mb-lg-0">
                <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('products') }}">Prodotti</a>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('services') }}">Servizi</a>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
                </li>
                {{-- <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('projects') }}">Progetti</a>
                </li> --}}
                <li class="nav-item pe-5">
                    <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
                </li>
            </ul>
            {{-- Dropdown utente autenticato --}}
            @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name ?? 'Profilo' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
