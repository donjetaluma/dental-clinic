<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientsList extends Component
{

    public function render(): Renderable
    {
    
        return view('livewire.patients-list', [
            'patients' => $patients
        ]);
    }
}
