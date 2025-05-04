<?php

namespace App\Services;

use App\Models\Patient;

class PatientsCreate
{
    public function create(array $data): Patient
    {
        return Patient::create($data);
    }
}
