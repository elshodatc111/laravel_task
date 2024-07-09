<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return redirect('dashboard');
    }
    public function dashboard(){
        return view('dashboard')->with([
            'application'=>Application::latest()->paginate(3)
        ]);
    }
}
