<?php

namespace App\Http\Livewire\Main\BusinessDashboard;

use Livewire\Component;

class Longterm extends Component
{
    public function render()
    {
        return view('livewire.main.business-dashboard.longterm')->extends('livewire.main.layout.app');
    }
}
