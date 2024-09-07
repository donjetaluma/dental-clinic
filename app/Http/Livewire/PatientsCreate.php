<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;

class PatientsCreate extends Component
{
    public function submit(CreatesPatient $creator): void
    {
        $creator($this->state);

        $this->reset('state');

        session()->flash('patientCreated', __('Patient successfully created.'));
    }

    public function render()
    {
        return view('livewire.patients-create');
    }
}
