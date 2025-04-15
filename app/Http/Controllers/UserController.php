<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $users = User::get();
        return view('users', compact('users'));
    }

    /**
     * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        //
    }
    /**
     * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new UserImport, request()->file('file'));
        return back();
    }
}
