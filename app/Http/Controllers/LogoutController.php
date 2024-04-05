<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //CONTROLADOR
    public function store() {
        auth()->logout();

        return redirect()->route('system.index');
    }

}
