<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //CONTROLADOR
    public function logout() {
        auth()->logout();

        return redirect()->route('system.index');
    }

}
