<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $user = auth()->user();
        // $employee = DB::table('users')->join('employee', 'users.employee_id', 'employee.employee_id')
        //                 ->select('username', 'employee_name', 'title')
        //                 ->where('username', $user->username)
        //                 ->first();
        return view('index', [
            // 'employee'=>$employee,
            // 'menus'=>$menus
        ]);
    }
}
