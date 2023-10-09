<?php

namespace App\Http\Livewire\Main\LetStarted;

use Livewire\Component;

class LetsStartedComponent extends Component
{
    public function render()
    {
        return view('livewire.main.let-started.lets-started-component')->extends('livewire.main.layout.app');
  

    }
    
}


// namespace App\Http\Livewire\Main\LetStarted;

// use Livewire\Component;

// class LetsStartedComponent extends Component
// {
//     public $userType;

//     public function render()
//     {
//         return view('livewire.main.let-started.lets-started-component')->extends('livewire.main.layout.app');
//     }

//     public function join()
//     {
//         $this->userType = 'consultant';
//         return redirect()->to('register?user_type=' . $this->userType);
//     }

//     public function hire()
//     {
//         $this->userType = 'client';
//         return redirect()->to('register?user_type=' . $this->userType);
//     }
// }


