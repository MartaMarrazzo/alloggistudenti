<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Appartamento extends Model {

    protected $table = 'Appartamento';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public $timestamps = false;
}