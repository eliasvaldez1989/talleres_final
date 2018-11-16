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
    public function getName()
    {
        return this->name;
    }
    public function getAdress()
    {
        return this->adress;
    }
    public function getDescription()
    {
        return this->description;
    }
    public function getNeighborhoodid()
    {
        return this->neighborhood_id;
    }
}
