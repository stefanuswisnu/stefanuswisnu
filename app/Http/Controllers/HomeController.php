<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function adminHome()
    {
        $user = DB::table('users')->get();
        return view('adminHome',['user' => $user]);
    }
    
    public function listBooks()
    {
        $user = DB::table('users')->get();
        return view('listBooks',['user' => $user]);
    }

    public function handleChart()
    {
        $userData = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Date(created_at)"))
                    ->pluck('count');
          
        return view('chart', compact('userData'));
    }

}
