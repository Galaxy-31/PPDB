<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = DataSiswa::where('name', '=', auth()->user()->name)
                        ->first();
        $totalSiswa = DataSiswa::count();
        $totalUser = DB::table('users')
                    ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
                    ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
                    ->where('roles.id', '!=', 3)
                    ->count();
        return view('home', compact('data', 'totalSiswa', 'totalUser'));
    }
}
