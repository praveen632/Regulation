<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['user_id', 'category_id', 'subcategory_id', 'name', 'service_type', 'slug', 'price', 'mrp_price', 'small_description', 'description', 'free_consultation_desc', 'short_description', 'talk_to_expert_description', 'caller_name', 'caller_description', 'testmonial_description', 'long_description', 'too_long_description', 'advisory_services', 'get_started', 'meta_title', 'meta_keywords', 'meta_description', 'status'];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Subcategory()
    {
    	return $this->belongsTo(Category::class, 'subcategory_id');
    }
}
