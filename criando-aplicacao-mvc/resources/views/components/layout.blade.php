<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <header class="bg-secondary p-3 mb-3">
        <nav class="navbar navbar-expand-lg bg-secondary text-white container">
            <div class="container-fluid">
                <h2 class="navbar-brand fs-3" href="#">PirateFlix</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active fs-5" aria-current="page" href="#">Series</a>
                        <a class="nav-link fs-5" href="#">Filmes</a>
                        <a class="nav-link fs-5" href="#">Animes</a>
                        <a class="nav-link disabled fs-5">Avaliar</a>
                    </div>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Procurar</button>
                </form>
            </div>

        </nav>
    </header>

    <main class="container">
        <h2>{{ $title }}</h2>
        {{-- é chamado de slot tudo que vai ficar no corpo do nosso site --}}
        {{ $slot }}
    </main>
</body>

</html>
