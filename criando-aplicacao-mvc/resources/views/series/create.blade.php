<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="episodios" class="form-label">Episodios:</label>
            <input type="number" id="episodios" name="episodios" class="form-control">
        </div>

        <div class="mb-3">
            <label for="classificacao_indicativa" class="form-label">Clasificacao Indicativa:</label>
            <input type="number" id="classificacao_indicativa" name="classificacao_indicativa" class="form-control">
        </div>

        <div class="d-flex justify-content-between">

            <a class="text-decoration-none text-white btn btn-secondary" href="{{ route('series') }}">Voltar</a>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
    </form>
</x-layout>
