<?php

namespace App\Http\Livewire\Main\BusinessDashboard;

use Livewire\Component;

class Probation extends Component
{
    public function render()
    {
        return view('livewire.main.business-dashboard.probation')->extends('livewire.main.layout.app');
    }
}
