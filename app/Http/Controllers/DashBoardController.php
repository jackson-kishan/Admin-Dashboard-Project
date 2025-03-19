<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function task_list() {
        return view('pages.tasks');
    }
}
