<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        //Consultamos la BD
        $salarios = Salario::all();
        return view('livewire.crear-vacante', [
            'salarios' => $salarios
        ]);
    }
}
