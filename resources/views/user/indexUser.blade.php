<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/indexUser.css')}}">
    <title>Home</title>
</head>
<body>
    <header class="header">
    @extends('layout.header')
    </header>
    @if(session()->has('message'))
    <p id="message" style="display: none;">{{ session('message') }}</p>
    <script>
        const mes = document.getElementById('message')
        alert(mes.textContent);
    </script>
    @endif
    @section('content')
        <main class="principal_content">
            <section class="card-user">
                <section class="card-header">
                    <h5>{{$user->name}} {{$user->last_name}}</h5>
                    <br>
                    <br>
                </section>
                <section class="card-body">
                    <article class="button_password">
                    </article>
                    <article class="button_password">
                        <section class="actions-card">
                            <div class="action" id="actionTwo">
                            Bienvenido de nuevo!
                            </div>
                        </section>
                    </article>
                    <section class="card-header-two">
                        <h3>Sobre ti!</h3>
                    </section>
                    <article class="button_password">
    <section class="actions-card">
        <div class="action">
            <a href="{{ route('profile.show') }}">Ver Perfil</a>
        </div>
    </section>
</article>
                    <article class="button_password">
                        <section class="actions-card">
                            <div class="action" id="actionTwo">
                                <a href="{{route('candidate.editProfile')}}">Actualizar Perfil Ocupacional</a>
                            </div>
                        </section>
                    </article>
                    <article class="experiencies">

                        <section class="actions-card">
                            <div class="action">
                                <a href="{{route('exp.create')}}">Añadir nuevo trabajo</a>
                            </div>
                            <form action="{{route('exp.index')}}" method="get">
                                <button>Ver </button>
                            </form>
                        </section>
                    </article>
                    <article class="hdv">
 
                    </article>
                    <article class="educations">

                        <section class="actions-card">
                            <div class="action">
                                <a href="{{route('education.create')}}">Añadir nuevo aprendizaje </a>
                            </div>
                            <form action="{{route('educations.index')}}" method="get">
                                <button>Ver <i class="bi bi-eye"></i></button>
                            </form>
                        </section>
                    </article>
                </section>
            </section>
            <br>
            <br>
            </section>
       
    </main>

    @endsection


</body>
</html>
