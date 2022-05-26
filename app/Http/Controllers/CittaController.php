<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;
use App\Models\Resources\Offerta;


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

    public function showAnnuncioSingolo($id){
        $offerta = $this->_ListaCittaModel->getOffertabyId($id);
        return view('annunciosingolo')  
                    ->with('offerta', $offerta);}

/*public function showAnnuncioSingolo($id){
        $offerta = Offerta::where('id',$id)->get();
      if (PostoLetto::where('offerta',$id)-> exists()) 

      { $dettagliannuncio = PostoLetto::where('offerta',$id)-> get() ;
        return view('dettagliannuncio') 
                 ->with('dettaglipostoletto',$dettagliannuncio)
                 ->with('offerta',$offerta);

      }
       else {
        $dettagliannuncio = Appartamento::where('offerta',$id)-> get() ;
        return view('dettagliannuncio') 
                 ->with('dettagliappartamento',$dettagliannuncio)
                 ->with('offerta',$offerta);


       }*/


}
