{{-- x-nomeDoArquivoOndeEstáSeuLayout, no meu caso o nome do arquivo onde está meu layou é 'layout' e está dentro da pasta components, lá eu criei a váriavel {{$title}}, que se encontra no h1 da minha página e no atributo title mesmo, para o título da página, no caso, passando aqui o valor de title como atributo de x-layout, onde, ambos terão o mesmo valor, por isso, lá em layouts elas são a mesma "váriavel"
! tudo dentro da tag x-layout será o corpo do meu projeto, então o valor da váriavel "slot" lá em layout, que se encontra no body do meu layout, é isto aqui abaixo, tudo dentro desta tag é o corpo do meu projeto, é o "slot"
--}}
<x-layout title="Séries">

    <a href="{{ route('series.criar') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group d-flex flex-column gap-2">
        @foreach ($series as $serie)
        {{-- classe anterior para mostrar números ao lado list-group-numbered --}}
            <ol class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $serie->nome }}</div>
                        Epísodios: {{ $serie->episodios }}
                    </div>
                    <span class="badge text-bg-primary rounded-pill">+{{ $serie->classificacao_indicativa }}</span>
                </li>
            </ol>
        @endforeach
    </ul>

</x-layout>
