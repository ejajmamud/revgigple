<?php

namespace App\Http\Livewire\Main\BusinessRegister;

use Livewire\Component;

class BusinessRegister extends Component
{
    public function render()
    {
        return view('livewire.main.business-register.business-register')->extends('livewire.main.layout.app');
    }
}
