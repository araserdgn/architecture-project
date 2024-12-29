<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'description',
        'client',
        'project_date',
        'location',
        'area',
        'website',
        'images',
        'is_active',
        'order'
    ];

    protected $casts = [
        'images' => 'array',
        'project_date' => 'date',
        'is_active' => 'boolean'
    ];

    // Slug için accessor
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFirstImageUrlAttribute()
    {
        if (!empty($this->images) && is_array($this->images)) {
            return Storage::url($this->images[0]);
        }
        return null;
    }

    public function getImageUrlsAttribute()
    {
        if (!empty($this->images) && is_array($this->images)) {
            return collect($this->images)->map(fn ($image) => Storage::url($image));
        }
        return collect([]);
    }
}
