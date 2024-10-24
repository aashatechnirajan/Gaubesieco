<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name, since it differs from the default pluralized form
    protected $table = 'product';

    // Fillable fields that can be mass-assigned
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'sub_category_id',
        'cost_price',
        'selling_price',
        'product_quantity',
        'status',
        'main_image',
        'availability_status',
        'other_images',
    ];

    // Casts the `other_images` column as an array
    protected $casts = [
        'other_images' => 'array',
        'status' => 'boolean',
    ];

    // Relationships

    // A product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A product belongs to a sub-category
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    // A product can have one offer
    public function offer()
    {
        return $this->hasOne(Offer::class, 'product_id');
    }
}
