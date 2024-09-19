<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfumaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Perfumaria da Serra</a>
            <a class="navbar-brand" href="/perfumes">Perfumes</a>
            <a class="navbar-brand" href="{{route('categorias')}}">Categorias</a>
            <a class="navbar-brand" href="{{route('lucro')}}">Lucro</a>
        </div>
    </nav>

    @yield("container")

</body>
</html>
