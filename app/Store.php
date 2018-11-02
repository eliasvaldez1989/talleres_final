<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'adress', 'descripcion','img','neighborhood_id'
    ];

    public function nighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

}
