<?php

namespace App\Http\Controllers;

use App\Models\Resources\Utente;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\LoginRequest;

class AdminController extends Controller {

    protected $_utente;

    public function __construct() {
        $this-> _utente = new Utente;
    }

    public function index() {
        return view('home');
    }

    public function registrati(NewProductRequest $request) {

        $utente = new Utente;
        $utente->user = $request->user;
        $utente->password = $request->password;
        $utente->nome = $request->nome;
        $utente->cognome = $request->cognome;
        $utente->sesso = $request->sesso;
        $utente->data_nascita = $request->data_nascita;
        $utente->tipo = $request->tipo;
        $utente->image = $request->image;
        $utente->save();
        return redirect()->action('AdminController@index');
    }

    public function view_registrati(){
        return view('registrati');
    }



    public function login(LoginRequest $request){
        
        $name = $request->user;
        $password = $request->password;
        if(Utente::where('user', $name)->where('password', $password)->exists()){
            return view('homelocatore');
        }
        else return view('where');
    }

    public function viewLogin(){
        return view('login');
    }

}