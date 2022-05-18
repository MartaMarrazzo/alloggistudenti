<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;

class CittaController extends Controller {

    protected $_ListaCittaModel;

    public function __construct() {
        $this->_ListaCittaModel = new ListaCitta;
    }

    public function showListaCitta1() {

        //Categorie Top
        $Cities = $this->_ListaCittaModel->getCities();

       
        return view('ListaCitta')
                        ->with('topCities', $Cities);
    }


    public function showAnnuncio($nome_citta){
        $Offerte = $this->_ListaCittaModel->getOffertebyCitta($nome_citta);
        return view('annunci')
                    ->with('offerte', $Offerte);
    }





}
