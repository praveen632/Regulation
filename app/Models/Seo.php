<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'page_id',
        'page_type',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'deleted_at',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'page_id', 'id');
    }

    public function Subcategory()
    {
        return $this->belongsTo(Category::class, 'page_id', 'id');
    }

    public function Service()
    {
        return $this->belongsTo(Service::class, 'page_id', 'id');
    }
}
