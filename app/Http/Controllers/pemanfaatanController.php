<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemanfaatanController extends Controller
{
    public function pemanfaatan()
    {
        return view ('form_pemanfaatan');
    }
}
