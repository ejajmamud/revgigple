<?php

namespace App\Http\Livewire\Main\Slider;

use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.main.slider.slider')->extends('livewire.main.layout.app');
    }
}
