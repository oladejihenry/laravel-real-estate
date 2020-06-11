<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Property;

class Type extends Model
{
    use Sluggable;
    protected $table= 'types';
    protected $fillable = ['name'];

    public function properties()
    {
    	return $this->belongsToMany(Property::class, 'properties_types');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }   
}
