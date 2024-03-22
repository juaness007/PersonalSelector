<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/showCompany.css')}}">
        <title>Profile</title>
    </head>

    <body>
    @extends('layout.header')
    @section('content')
    <section class="container">
        <section class="headerCont">
            <h2> Perfil de {{$user->name}}</h2>
        </section><br>
        <section class="info">
            <h4>Nombre: {{$user->name}} {{$user->last_name}}</h4>
            <br>
            <br>
            <h4>Experiencias:</h4>
            <ul>
                @foreach ($user->experiences as $experience)
                    <li>{{ $experience->company_experience }}</li>
                @endforeach
            </ul>
            <br>
            <h4>Estudios:</h4>
            <ul>
                @foreach ($user->educations as $education)
                    <li>{{ $education->shcool_name }} - {{ $education->obtained_title }}</li>
                @endforeach
            </ul>
            <br>
            <h4>Soportes: </h4>
            <ul>
                @foreach ($user->supports as $support)
                <li> {{$support->support_type_id}} {{$support->support_file}}</li>
                @endforeach
            </ul>
        </section>
    </section>
    @endsection
</body>

    </html>