<?php

namespace App\Http\Livewire\Main\BusinessLogin;

use Livewire\Component;

class BusinessLogin extends Component
{
    public function render()
    {
        return view('livewire.main.business-login.business-login')->extends('livewire.main.layout.app');
    }
}
