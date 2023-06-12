<header>
    <div class="container">

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
    
                {{-- logo --}}
                <a class="navbar-brand text-uppercase fs-1 text-danger fw-bold" href="#">Trenitalia</a>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                        {{-- home --}}
                        <li class="nav-item ps-3">
                            <a class="nav-link active fw-bold fs-5" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>