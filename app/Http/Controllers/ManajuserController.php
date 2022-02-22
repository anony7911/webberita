<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManajuserController extends Controller
{
    public function index()
    {
        $manajusers = User::all();
        return view('admin.manajemen-user', compact('manajusers'));
    }
}
