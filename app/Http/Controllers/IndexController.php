<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\BlogUser;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('MyPages/Index');
    }

    public function register()
    {
        return Inertia::render('Auth/Register');
    }

    public function create(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'password' => 'password required',
        //     'email' => 'email required'
        // ]);

        $blogs = new blogUser();
        $blogs->id = auth()->user()->id;
        $blogs->save();

        return Inertia::render('Auth/Dashboard');
    }

    public function show()
    {
        $blogUser = auth()->user()->blogUser();

        return Inertia::render('Auth/Dashboard')->dd($blogUser);
    }
}
    
