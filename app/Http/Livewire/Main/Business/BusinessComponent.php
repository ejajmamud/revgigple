<?php

namespace App\Http\Livewire\Main\Business;

use Livewire\Component;

class BusinessComponent extends Component
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
        return view('livewire.main.business.business-component')->extends('livewire.main.layout.app');;
    }
    
      public function hire()
    {
        $this->userType = 'client';
        
            $this->AccountType = 'buyer'; // Replace 'account_type_value' with the desired value for the account_type parameter
    return redirect()->to('auth/register?user_type=' . $this->userType . '&account_type=' . $this->AccountType);
        // return redirect()->to('auth/register?user_type=' . $this->userType);
    }
    
    
         public function businesslogin()
    {
        $this->userType = 'client';
        
            $this->AccountType = 'buyer'; // Replace 'account_type_value' with the desired value for the account_type parameter
    return redirect()->to('auth/login?user_type=' . $this->userType . '&account_type=' . $this->AccountType);
        // return redirect()->to('auth/register?user_type=' . $this->userType);
    }
}



