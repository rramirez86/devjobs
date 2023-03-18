<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class EditaVacante extends Component
{
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.edita-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
