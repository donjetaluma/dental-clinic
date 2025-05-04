<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Carbon\Carbon;
use App\Services\PatientCreator;
use Illuminate\Contracts\Support\Renderable;


class PatientsCreate extends Component
{
    public $state = [];
    protected CreatesPatient $creator;

    public function mount(CreatesPatient $creator): void
    {
        $this->creator = $creator;
    }

    public function submit(): void
    {
        $this->creator->create($this->state); // call a method instead of calling the object directly

        $this->reset('state');

        session()->flash('patientCreated', __('Patient successfully created.'));
    }

    public function render()
    {
        return view('livewire.patients-create');
    }
}
