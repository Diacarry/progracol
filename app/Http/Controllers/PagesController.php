<?php

namespace App\Http\Controllers;

use App\TicketUser;
use App\TicketPriority;
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
    public function create (Request $request) {
        //dd($request->all());
        $request->validate([
            'inputregister1' => 'required|max:50',
            'inputregister2' => 'required|max:50',
            'inputregister3' => 'required|max:100',
            'inputregister4' => 'required|max:3'
        ]);
        return 'Exito!';//view('user');
    }
}