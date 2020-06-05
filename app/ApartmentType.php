<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentType extends Model
{
	protected $table= 'properties_categories';
    protected $guarded=[];


    public function apartments()
    {
    	return $this->belongsToMany(Apartments::class, 'categories_posts');
    }
}
