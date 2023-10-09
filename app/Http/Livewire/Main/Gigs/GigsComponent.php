<?php

namespace App\Http\Livewire\Main\Gigs;

use Livewire\Component;

class GigsComponent extends Component
{
    public function render()
    {
        return view('livewire.main.gigs.gigs-component')->extends('livewire.main.layout.app');
    }
}
