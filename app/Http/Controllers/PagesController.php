<?php

namespace App\Http\Controllers;

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
        $prueba = [
            [
                'id' => 1,
                'content' => 'Misterio'
            ],
            [
                'id' => 2,
                'content' => 'Peligro'
            ]
        ];
        //$tickets = TicketPriority::all();
        return view('ticket', [
            'msgs' => []//$prueba
        ]);
    }
}
