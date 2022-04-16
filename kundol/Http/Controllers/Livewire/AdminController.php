<?php

namespace App\Http\Controllers\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Services\Web\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function own_trade(){
        $categories = Category::all();
        return view('admin.owntrade', compact('categories'));
    }
}
