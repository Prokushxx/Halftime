<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.member.home')->extends('layouts.app');
    }
}
