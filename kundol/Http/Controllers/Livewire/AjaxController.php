<?php

namespace App\Http\Controllers\Livewire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function productsList(Request $request){
        dd($request);
    }
}
