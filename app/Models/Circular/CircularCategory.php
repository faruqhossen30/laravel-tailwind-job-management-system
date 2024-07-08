<?php

namespace App\Models\Circular;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularCategory extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'category_id'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
