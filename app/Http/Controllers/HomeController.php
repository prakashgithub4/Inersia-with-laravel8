<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home(){
        $posts = Post::all();
        return Inertia::render('Home',['posts'=>$posts]);
    }
    public function save(Request $request){

      Post::create($request->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
    ]));
     return redirect('/home-two');
    }
    public function add(){
        return Inertia::render('Add');
    }
}
