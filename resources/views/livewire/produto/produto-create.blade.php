<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" wire:model='nome'>
        </div>
        <div class="col-12">
            <label for="descricao" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="descricao" wire:model='descricao'>
        </div>
        <div class="col-md-12">
            <label for="quantidade_estoque" class="form-label">Quantidade_Estoque</label>
            <input type="text" class="form-control" id="quantidade_estoque" wire:model='quantidade_estoque'>
        </div>
        <div class="col-md-12">
            <label for="quantidade_minima" class="form-label">Quantidade_Minima</label>
            <input type="text" class="form-control" id="quantidade_minima" wire:model='quantidade_minima'>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>