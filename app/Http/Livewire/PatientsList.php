<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientsList extends Component
{
    public function submit(UpdatesPatient $updater): void
    {
        $updater($this->patientToUpdate, $this->state);

        $this->reset('state');

        $this->showModal = false;

        session()->flash('patientUpdated', __('Patient successfully updated.'));
    }

    public function delete(DeletesPatient $deleter): void
    {
        $deleter($this->patientToUpdate);

        $this->showModal = false;

        session()->flash('patientDeleted', __('Patient successfully deleted.'));
    }
}
