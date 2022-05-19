<?php

namespace App\Models;

use App\Models\Resources\Città;
use App\Models\Resources\Offerta;


class ListaCitta {

    public function getCities() {
        return Città::select('name')->get();
    }

    public function getOffertebyCitta($citta, $paged=1, $order=null){
        $offerte = Offerta::where('città', $citta)->get();
        return $offerte;
    }


/*
        return Citta::where('id', [1])->get();

 $Cittas = Citta::all();
        return view('Cittas', ['Cittas' => $Cittas]);
    public function getCatsByParId($topId) {
        return Category::whereIn('parId', $topId)->get();
    }

    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catId, $paged = 1, $order = null, $discounted = false) {

        $prods = Product::whereIn('catId', $catId)
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                        $query->whereIn('parId', $catId);
        });
        if ($discounted) {
            $prods = $prods->where('discounted', true);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        return $prods->paginate($paged);
    }
*/
}
