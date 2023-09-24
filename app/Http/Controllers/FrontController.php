<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function diegoKaplana() {
        return view('front.diego-kaplana');
    }

    public function manuelEscalante() {
        return view('front.manuel-escalante');
    }

    public function marioMandujano() {
        return view('front.mario-mandujano');
    }

    public function pabloCalvillo() {
        return view('front.pablo-calvillo');
    }

    public function pabloBrusas() {
        return view('front.pablo-brusas');
    }

    public function ernestoAlemany() {
        return view('front.ernesto-alemany');
    }

    public function demoHabanero() {
        return view('front.demo-habanero');
    }

    public function digitalContent() {
        return view('front.digital-content');
    }

    public function film() {
        return view('front.film');
    }

    public function productionServices() {
        return view('front.production-services');
    }

    public function about() {
        return view('front.about');
    }

    //Se creo pero esta por definir su estadia
    public function santiagoRuffa() {
        return view('front.santiago-ruffa');
    }
}
