<?php

namespace App\Http\Livewire\Main\LetStarted;

use Livewire\Component;

class LetStartedComponent extends Component
{
    // public function render()
    // {
    //     return view('livewire.main.let-started.let-started-component')->extends('livewire.main.layout.app');
    // }
    
    
     public $userType;
     
     public $AccountType;

    public function render()
    {
        // return view('livewire.main.let-started.let-started-component')->extends('livewire.main.layout.app')->extends('livewire.main.auth.layout.auth');
        
        return view('livewire.main.let-started.let-started-component')->extends('livewire.main.layout.app');
    }

    public function join()
    {
        $this->userType = 'consultant';
        
         $this->AccountType = 'seller'; // Replace 'account_type_value' with the desired value for the account_type parameter
    return redirect()->to('auth/register?user_type=' . $this->userType . '&account_type=' . $this->AccountType);
        // return redirect()->to('auth/register?user_type=' . $this->userType);
    }

    public function hire()
    {
        $this->userType = 'client';
        
            $this->AccountType = 'buyer'; // Replace 'account_type_value' with the desired value for the account_type parameter
    return redirect()->to('auth/register?user_type=' . $this->userType . '&account_type=' . $this->AccountType);
        // return redirect()->to('auth/register?user_type=' . $this->userType);
    }
    
    
}



 

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