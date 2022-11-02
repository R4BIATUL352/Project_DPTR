<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengawasanController extends Controller
{
    public function pengawasan()
    {
        return view ('form_pengawasan');
    }
}
