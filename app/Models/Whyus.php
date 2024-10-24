<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Whyus extends Model
{
    

    protected $table = 'whyus';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'image',
        'status',
        'metadata_id'
    ];

    protected $casts = [
        'image' => 'array', // Handle multi-image upload as an array
    ];

    // Relationships
    public function metadata()
    {
        return $this->belongsTo(Metadata::class);
    }
    // /**
    //  * Return the sluggable configuration array for this model.
    //  *
    //  * @return array
    //  */
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title',
    //         ],
    //     ];
    // }

}
