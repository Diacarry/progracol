<?php

namespace App\Http\Controllers;

use App\TicketUser;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function home () {
        $name = 'Andres Carranza Rivera';
        return view('index', [
            'Name' => $name
        ]);
    }
    public function tickets () {
        $tickets = TicketUser::all();
        return view('ticket', [
            'data' => $tickets
        ]);
    }
    public function register () {
        return view('register');
    }
}