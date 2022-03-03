<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
  public $email,$password;

  public $rules = [
  'email'=>'required|exists:users,email|email',
  'password'=>'required',
  ];

  public $messages = [
  'required'=>'*Please fill out this field',
  ];

  public function updated($dtuff){
  $this->validateOnly($dtuff);
  }

  public function submit(){
    $this->validate();

    if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
      if (Auth::user()->user_type == "member"){
      return redirect(url('Halftime'));
      }
      else{
        return redirect(url('admin'));
      }
    }
    else{
      session()->flash('error','Something went wrong');
    }
  }

    public function render()
    {
        return view('livewire.login')->extends('layouts.app');
    }
}
