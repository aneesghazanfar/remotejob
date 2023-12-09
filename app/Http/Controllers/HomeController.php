<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Branch;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => 'Bearer TgeQK2POExchRm2FoWNHeTHjS6LlseeTDwwxjcsp',
        ])->get('https://api.honorlink.org/api/game-list');
    
        $games = $response->json(); // This will contain your response body as an array
    dd($games);



        // dd('home');
        // count users
        $users = User::all();
        $users_count = $users->count();
        // count branches
        $branches = Branch::all();
        $branches_count = $branches->count();

        if(Auth::user()->role == 0)
        {
            return view('owner.index', compact('users_count', 'branches_count'));
        }
        else if(Auth::user()->role == 1)
        {
            return redirect()->route('owner.dashboard');
        }
        else if(Auth::user()->role == 2)
        {
            return redirect()->route('staff.dashboard');
        }
        else if(Auth::user()->role == 3)
        {
            return redirect()->route('customer.dashboard');
        }
        else
        {
            return redirect()->route('login');
        }


        return view('home');
    }
}
