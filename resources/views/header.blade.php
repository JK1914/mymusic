<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>MyMusic</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('musics')}}">Главная</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('musiclist')}}">Список песен</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('create')}}">Добавить</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/music/update')}}">Изменить</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/music/delete')}}">Удалить</a>
                            </li>   
                        </ul>
                    </div>
                </div>
                <div>Привет,&nbsp&nbspМеломан</div>
            </nav>
        </div>

        @yield('content')
 
    </div>
</body>

</html>