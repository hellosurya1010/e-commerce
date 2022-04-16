<?php

namespace App\Http\Livewire;

use App\Models\Admin\Category;
use Illuminate\View\Component as ViewComponent;
use Livewire\Component;

class Owntrade extends ViewComponent
{   
    public $cat; 

    public function hello(){
        dd('hello');
    }

    public function render(){
        return view('livewire.owntrade');
    }
}
