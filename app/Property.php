<?php

namespace App;

use App\User;
use App\ApartmentType;
use App\Category;
use App\Location;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Property extends Model
{
	use Sluggable;

    protected $table= 'properties';
    protected $fillable=['title','description','featured_image','first_image','second_image','third_image','fourth_image','price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function apartmenttype()
    {
        return $this->belongsToMany(Category::class, 'categories_properties');
    }

    public function location()
    {
        return $this->belongsToMany(Location::class, 'locations_properties');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
    return 'slug';
    }
}
