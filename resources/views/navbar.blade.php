<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Rumah Sakit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Hospitals <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('patient') }}">Patients</a>
                </li>
                <li class="nav-item dropdown">
                    <form action="{{ url('logout') }}" method="post">@csrf
                        <button class="nav-link btn-danger btn text-white" href="/logout">
                            Logout
                        </button>
                    </form>


                </li>
            </ul>
        </div>
    </div>

</nav>
