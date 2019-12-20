<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {

    function index(){

        $users = [
            'Victor',
            'Felipe'
        ];

        return view('users.index', compact('users'));
    }
}
