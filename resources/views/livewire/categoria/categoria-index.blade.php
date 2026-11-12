<div class="mt-5">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live="search"
        placeholder="pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $p)
            <tr>
                <th scope="row">{{ $p->id}}</th>
                <td>{{ $p->nome}}</td>
                <td>{{ $p->categoria}}</td>
                <td>{{ $p->quantidade_estoque}}</td>
                <td>{{ $p->quantidade_minima}}</td>
                <td>

                    <a href="{{route('categoria.edit', ['id' => $p->id])}}"
                        class="btn btn-sm btn-info">Editar</a>

                        <button wire:click='delete({{$p->id}})'
                            class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>