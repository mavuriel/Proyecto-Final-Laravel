<?php

namespace App\Http\Livewire;
use App\Models\Mercancia;
use Livewire\Component;
use Livewire\WithPagination;

class PruebaComponente extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //public $entregas;
    public $msg;

    public function mount(){
        //$this->msg = "prueba";
    }
    public function render()
    {

        $entregas = Mercancia::orderByDesc('id');

        if($this->msg){
            $entregas->where('destino','like','%'.$this->msg.'%')
            ->orWhere('conductor','like','%'.$this->msg.'%')
            ->orWhere('matricula','like','%'.$this->msg.'%')
            ;
        }

        $entregas = $entregas->paginate(10);
        return view('livewire.prueba-componente',compact('entregas'));

    }

    public function limpiaFiltro(){
        $this->msg="";
    }
}
