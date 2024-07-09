<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\User;
use App\Mail\ApplicationCreateted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ApplicationController extends Controller
{
    public function store(Request $request){
        if($request->hasFile('file')){
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs(
                'files',
                $name,
                'public'
            );
        }
        // Storgae papkasiga joylangan fayllarni public papkasiga joylashtiriladi
        // php artisan storage:link
        
        
        $request->validate([ 
            'subject'=>'required|max:255',
            'message'=>'required',
            'file' => 'file|mimes:jpg,png,pdf'
        ]); // Fake Filer

        $Application = Application::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $path??null
        ]);


        return redirect()->back();

    }
}
