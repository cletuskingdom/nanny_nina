<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return User::where('age', '>', 35)
            ->where('address', 'LIKE', '%Kingdom Street%')
            ->where('status', 1)
            ->latest()->get();
    }
}
