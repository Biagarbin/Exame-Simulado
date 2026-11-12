<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    
    public $nome;
    public $categoria_id;
    //função mount
    //receber id de referência do que será editado (via rota)
    //buscar por id
    //validar se a pesquisa retornou resultado
    //preencher os campos
 
    //update
    //receber id de referência do que será editado (via rota)
    //buscar por id
    //validar se a pesquisa retornou resultado
    //capturar od dados dos campos
    //atualizar
    //retornar e redirecionar

     public function mount($id){

        $categoria = Categoria::find($id);

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $this->categoria_id = $categoria->id;
        $this->nome = $categoria->nome;
     }

     public function update(){
        $categoria = Categoria::find($this->categoria_id);

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->nome = $this->nome;
        $categoria->save();
        session()->flash('error', 'Atualizado');
        return redirect()->route('categoria.index');
     }


    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
