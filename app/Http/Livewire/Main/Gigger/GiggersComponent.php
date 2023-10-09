<?php

namespace App\Http\Livewire\Main\Gigger;

use App\Models\Country;
use App\Models\User;
use App\Models\UserSkill;
use Livewire\Component;
use Livewire\WithPagination;


class GiggersComponent extends Component
{

    use WithPagination;

    public $currency,$search,$ifConditionStatus="none";
    // public $locations= [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
    public $locations=[];

 

    public function getCountryName($country_id){
 

        $countryName = Country::select('name')->find($country_id);
        if(is_null($countryName) || empty($countryName)){
            echo 'N/A';
        }else{
            echo $countryName->name;
        }
    }




    public function getSkrillName($user_id){

        $userSkrills = UserSkill::select('name')->where('user_id', $user_id)->get();
        return $userSkrills;
    }




    public function render()
    {
        
 
         
        
       if($this->search){
            
            // $this->ifConditionStatus="Search->location";
            
            sleep(1);
            
           
           
           if(!empty($this->locations)){
               return view('livewire.main.gigger.giggers-component',[
                'users' => User::where('status', 'active')->where('account_type','seller')
                ->Where('fullname', 'like', '%'.$this->search)
                ->orWhere('first_name', 'like', '%'.$this->search)
                ->orWhere('last_name', 'like', '%'.$this->search)
                ->whereIn('country_id',$this->locations)
                ->paginate(30),
                'countries' => Country::select('id','name','code')->distinct()->get(),
            ])->extends('livewire.main.layout.app');
           }
           
           
            // $this->ifConditionStatus="Search";
           
            return view('livewire.main.gigger.giggers-component',[
                'users' => User::where('status', 'active')->where('account_type','seller')
                ->where('fullname', 'like', '%'.$this->search)
                ->orWhere('first_name', 'like', '%'.$this->search)
                ->orWhere('last_name', 'like', '%'.$this->search)
                ->paginate(30),
                'countries' => Country::select('id','name','code')->distinct()->get(),
            ])->extends('livewire.main.layout.app');
        
            
        }
        
        
        
        
        
        elseif( !empty($this->locations) ){
            
            // $this->ifConditionStatus="locations->seach";
            sleep(1);
            
            
            
            if($this->search){
               return view('livewire.main.gigger.giggers-component',[
                'users' => User::where('status', 'active')->where('account_type','seller')
                ->Where('fullname', 'like', '%'.$this->search)
                ->orWhere('first_name', 'like', '%'.$this->search)
                ->orWhere('last_name', 'like', '%'.$this->search)
                ->whereIn('country_id',$this->locations)
                ->paginate(30),
                'countries' => Country::select('id','name','code')->distinct()->get(),
            ])->extends('livewire.main.layout.app');
           }
            
            
            // $this->ifConditionStatus="locations";
            
            
            
             return view('livewire.main.gigger.giggers-component',[
                'users' => User::where('status', 'active')
                ->where('account_type','seller')
                ->whereIn('country_id',$this->locations)
                ->paginate(30),
                
                'countries' => Country::select('id','name','code')->distinct()->get(),
                
            ])->extends('livewire.main.layout.app');
        }
        
   
   
 
        
        
        
        
        
        
        else{
             $this->ifConditionStatus="else";
            return view('livewire.main.gigger.giggers-component',[
                'users' => User::where('status', 'active')->where('account_type','seller')->paginate(30),
                'countries' => Country::select('id','name','code')->distinct()->get(),
            ])->extends('livewire.main.layout.app');
        }

         
        
    }


}
