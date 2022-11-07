<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registro;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;

    public $ae_participante = 0;
  //  public $vl_registro = new Registro();
    public $vl_participantesList = null;


    public function render()
    {
        if($this->ae_participante == 0){
            $this->vl_participantesList = Registro::all()   ;
        }else{

        }
        return view('livewire.home-component');
    }
}
