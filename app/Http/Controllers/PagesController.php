<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function home () {
        $name = 'Andres Carranza Rivera';
        return view('index', [
            'Name' => $name
        ]);
    }
    public function tickets () {
        return view('ticket');
    }
}
