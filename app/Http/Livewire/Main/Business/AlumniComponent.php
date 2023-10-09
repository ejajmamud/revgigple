<?php

namespace App\Http\Livewire\Main\Alumni;

use Livewire\Component;

class AlumniComponent extends Component
{
    //   public function redirectToRegistration()
    // {
    //     // Generate the URL with parameters
    //     $url = route('auth/register', ['user_type' => 'client', 'account_type' => 'buyer']);

    //     // Redirect to the generated URL
    //     return redirect($url);
    // }
    
     public $userType;
     
     public $AccountType;
    
    
    public function render()
    {
        return view('livewire.main.business.alumni-component')->extends('livewire.main.layout.app');;
    }
    
}



