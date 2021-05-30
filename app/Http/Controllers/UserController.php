<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return "id: $user->id \n name: $user->name \n email: $user->email \n password: $user->password \n remember_token: $user->remember_token \n created_at: $user->created_at \n updated_at: $user->updated_at";
    }
}
