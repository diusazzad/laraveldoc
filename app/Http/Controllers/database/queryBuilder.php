<?php

namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class queryBuilder extends Controller
{
    // public function index(): View
    // {
    //     $users = DB::table('users')->get();

    //     return view('database.queryBuilder', ['users' => $users]);
    // }

    // public function singleRowFromATable(): View
    // {
    //     $users = DB::table('users')->get();
    //     $user = DB::table('users')->where('name', 'user 10')->first();
    //     $userEmail = $user->email;

    //     return view('database.queryBuilder', ['users' => $users, 'userEmail' => $userEmail]);
    // }

    // public function showData(): View
    // {
    //     $users = DB::table('users')->get();
    //     $singleUser = DB::table('users')->where('name', 'user 10')->first();
    //     $emailList = DB::table('users')->pluck('email');

    //     return view('database.queryBuilder', compact('users', 'singleUser', 'emailList'));
    // }

    public function index(): View
    {
        return view('database.queryBuilder');
    }

    public function getData(string $type): View
    {
        if ($type === 'all-rows') {
            $data = DB::table('users')->get();
            return view('database.allRows', ['data' => $data]);
        } elseif ($type === 'single-row') {
            $data = DB::table('users')->where('name', 'user 10')->first();
            return view('database.singleRow', ['data' => $data]);
        } elseif ($type === 'column-values') {
            $data = DB::table('users')->pluck('email');
            return view('database.columnValues', ['data' => $data]);
        }

        // Return the default view here
        return view('database.queryBuilder');
    }



}
