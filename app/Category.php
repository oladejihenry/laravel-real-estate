<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;
use App\User;

class Category extends Model
{
    protected $guarded=[];


    public function properties()
    {
    	return $this->belongsToMany(Property::class, 'categories_properties');
    }
}
