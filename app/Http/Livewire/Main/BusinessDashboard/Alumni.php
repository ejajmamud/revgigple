<?php

namespace App\Http\Livewire\Main\BusinessDashboard;

use Livewire\Component;

class Alumni extends Component
{
    public function render()
    {
        return view('livewire.main.business-dashboard.alumni')->extends('livewire.main.layout.app');
    }
}
