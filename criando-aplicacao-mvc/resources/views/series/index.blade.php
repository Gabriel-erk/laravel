{{-- x-nomeDoArquivoOndeEstáSeuLayout, no meu caso o nome do arquivo onde está meu layou é 'layout' e está dentro da pasta components, lá eu criei a váriavel {{$title}}, que se encontra no h1 da minha página e no atributo title mesmo, para o título da página, no caso, passando aqui o valor de title como atributo de x-layout, onde, ambos terão o mesmo valor, por isso, lá em layouts elas são a mesma "váriavel"
! tudo dentro da tag x-layout será o corpo do meu projeto, então o valor da váriavel "slot" lá em layout, que se encontra no body do meu layout, é isto aqui abaixo, tudo dentro desta tag é o corpo do meu projeto, é o "slot"
--}}
<x-layout title="Séries">

    <ul>
        @foreach ($series as $serie)
            <li>
                {{ $serie }}
            </li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series)}}
    </script>
</x-layout>
