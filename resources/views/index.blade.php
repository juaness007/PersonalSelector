

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <style>
.articulo-container {
  display: flex;
  flex-wrap: wrap; 
  justify-content: center; 
  margin-top: 20px;
  margin-left:300px;
}

.articulo {
  width: 30%; 
  background-color: #576CA8; 
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin: 0 10px 20px; 
}

.articulo p {
  font-size: 16px;
  color: #ffff;
  line-height: 1.6;
}


    </style>
</head>
<body>
<header>
        <section class="interior">
            <a href="" class="logo"><img src="{{ asset('img/Logo.png') }}" alt="Emplay_Hub"></a>
            <input type="checkbox" id="icon-menu"/>
            <label for="icon-menu">
                <img src="{{ asset('img/menu.png') }}" class="menu-icono" alt="">
            </label>
            <nav class="navegacion">
            </nav>

            <div id="barra-superior">
                @if (auth()->user())
                <p class="mensaje-bienvenida">Bienvenid@ {{ auth()->user()->username }}</p>
                <ul class="menu-usuario">
                    @if (auth()->user()->id_user_types == 1)
                    <li><a href="{{ route('headerAdmin')}}">User Type Admin</a></li>

                    @elseif (auth()->user()->id_user_types == 2)
                    <li><a href="{{ route('headerSelector')}}">User Type Selector</a></li>

                    @elseif (auth()->user()->id_user_types == 3)
                    <li><a href="{{ route('headerRecruiter')}}">User Type Recruiter</a></li>

                    @elseif (auth()->user()->id_user_types == 4)
                    <li><a href= "{{ route('headerCandidate')}}">User Type Candidate</a></li>

                    @elseif (auth()->user()->id_user_types == 5)
                    <li><a href="{{ route('headerCompany')}}" >User Type Company</a><li>
                    @endif

                </ul>
                <form class="form-logout" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>Cerrar sesión</button>
                </form>
                @else
                <br>
                <br>
                <br>
                <ul class="login">
                    <li><a href="{{ route('users.create') }}">Sign in</a></li>
                    <li><a href="{{ route('user.login') }}">Log in</a></li>
                </ul>
                @endif
            </div>
        </section>
    </header>


    <br>
    <div id="contenido-principal">
        <div class="articulo-container">
            <div class="articulo">
                <h2>Bienvenido al Simulador de Seleccion de Personal</h2>
                <p>Una herramienta revolucionaria que agiliza el proceso de aprendizaje de contratación al evaluar las habilidades de los candidatos de manera precisa y objetiva. </p>
            </div>
            <div class="articulo">
                <h2>Desarrolladores</h2>
                <p>Informacion proximamente....</p>
            </div>
        </div>
        <div class="articulo-container">
            <div class="articulo">
                <h2>Título del artículo 3</h2>
                <p>Contenido del artículo 3...</p>
            </div>
        </div>
    </div>

</body>
</html>
