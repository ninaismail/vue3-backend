<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'location',
        'year',
        'architects',
        'client',
        'images',
        'thumbnail',
        'created_at',
        'category_id',
        'type_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
