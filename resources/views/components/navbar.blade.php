<nav class="navbar navbar-expand-lg navbar-bg-color">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Velvet Frame</a>
        @if ($isDetail)
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">← Torna alla Home</a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
