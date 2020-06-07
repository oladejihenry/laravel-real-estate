<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['city','state'];

    public function property()
    {
    	return $this->belongsToMany(Property::class, 'locations_properties');
    }
}
