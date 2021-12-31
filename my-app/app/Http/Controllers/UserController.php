<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = [
            'Elon Musk',
            'Jeff Bezos',
            'Mark Zuckerberg',
            'Bill Gates',
            'Steve Jobs'
        ];
        return view('user', [
            'users' => $users
        ]);
    }
}
