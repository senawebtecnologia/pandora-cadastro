<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
class DashboardController extends Controller
{
    public function index()
    {
        $users = Contact::all()->count();
        return view('dashboard.index', compact('users'));
    }
}
