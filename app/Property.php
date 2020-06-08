<?php

namespace App;

use App\User;
use App\ApartmentType;
use App\Category;
use App\Location;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
	use Sluggable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table= 'properties';
    protected $fillable=['title','description','featured_image','first_image','second_image','third_image','fourth_image','price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function isTheOwner($user)
    {
        return $this->user_id === $user->id;
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
