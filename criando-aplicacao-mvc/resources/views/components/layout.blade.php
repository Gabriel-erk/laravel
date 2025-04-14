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
    <div class="container">
        <h2>{{ $title }}</h2>
        {{-- é chamado de slot tudo que vai ficar no corpo do nosso site --}}
        {{ $slot }}
    </div>
</body>

</html>
