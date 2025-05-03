<?php

namespace App\Http\Livewire;

use Livewire\Component;

namespace App\Services;

use App\Models\Patient;

class CreatesPatient
{
    public function create(array $data): Patient
    {
        return Patient::create($data);
    }
}
