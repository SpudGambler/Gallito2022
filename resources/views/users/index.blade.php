<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gallito</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/assets/gallo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::to('/') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/') }}">Gallito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    @if (Route::has('login'))
                        <ul class="navbar-nav ms-auto">
                            @auth
                            <li class="nav-item"><a class="nav-link" href="#projects">{{ Auth::user()->name }}</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <h2 class="text-white mb-4">Usuarios Registrados En Gallito</h2>
                    @forelse ($users as $user)
                        <div class="card text-white bg-dark mb-3" style="width: 23rem; margin-right: 1.6%">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$user->created_at->diffForHumans()}}</h6>
                                <p class="card-text" style="margin-bottom: 5%">{{$user->email}}</p>
                                <a href="{{ url('/') }}/{{$user->id}}" class="card-link">Ver Posts</a>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info" role="alert">
                            No hay usuarios registrados en Gallito
                        </div>
                    @endforelse
                </div>
                <div class="mt-3"> {{ $users->links() }} </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ URL::to('/') }}/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

