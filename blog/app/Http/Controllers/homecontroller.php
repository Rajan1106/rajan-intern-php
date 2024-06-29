<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class homecontroller extends Controller
{
   
    public function home(){
     $blog= users::orderBy('id','desc')->paginate(3);
        return view('home',compact('blog'));
    }

    public function create(){
        return view('create');

    }

    public function store(Request $request)
    {  
        $request->validate([
            'title' => 'required',
            'date'  => 'required',
            'blog'  => 'required'
        ]);    
        $data = $request->except('_token');
         Users::create($data);
        return redirect()
        ->route('home.home')
        ->withmessage('your blog has been created successfully');
    
    } 

}