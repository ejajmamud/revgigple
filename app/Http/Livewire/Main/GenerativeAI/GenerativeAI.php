<?php

namespace App\Http\Livewire\Main\GenerativeAI;

use Livewire\Component;

class GenerativeAI extends Component
{
    public function render()
    {
        return view('livewire.main.generative-a-i.generative-a-i')->extends('livewire.main.layout.app');
    }
}
