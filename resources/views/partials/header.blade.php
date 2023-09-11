<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navdropdown" aria-controls="navdropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navdropdown">

                <div class="navbar-nav z-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        Home
                    </a>
                    <a class="nav-link" href="#">
                        About Us
                    </a>
                    <a class="nav-link" href="{{ route('contacts') }}">
                        Contacts
                    </a>
                </div>
            </div>
        </div>

    </nav>

</header>