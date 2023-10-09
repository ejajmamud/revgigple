<?php

namespace App\Http\Livewire\Main\About;

use Livewire\Component;

class AboutComponent extends Component
{
    
     public $about_msg = 'Welcome to the About page!';
    public function render()
    {
        return view('livewire.main.about.about-component')->extends('livewire.main.layout.app');
    }
}
