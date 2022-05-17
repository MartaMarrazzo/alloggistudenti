<?php

namespace App\Models;

use App\Models\Resources\Citta;


class ListaCitta {

    public function getCities() {
        return Citta::select('name')->get();
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
