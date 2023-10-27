<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Main() {
        return view('admin.index');
    }
    function GeneralSettings() {
        return view('admin.settings.general');
    }
}
