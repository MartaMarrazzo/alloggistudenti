<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class PostoLetto extends Model {

    protected $table = 'postoLetto';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public $timestamps = false;
}