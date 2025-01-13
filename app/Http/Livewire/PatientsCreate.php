<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;

class PatientsCreate extends Component
{

    public function render()
    {
        return view('livewire.patients-create');
    }
}
