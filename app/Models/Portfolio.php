<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope untuk portfolio aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk kategori tertentu
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Accessor untuk URL gambar
    public function getImageUrlAttribute()
    {
        return asset('assets/img/portfolio/' . $this->image);
    }

    // Konstanta kategori
    public static function getCategories()
    {
        return [
            'kaos' => 'Kaos',
            'hoodie' => 'Hoodie',
            'jersey' => 'Jersey',
            'seragam' => 'Seragam',
            'merch' => 'Merch'
        ];
    }
}
