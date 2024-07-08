<?php

namespace App\Models\Blog;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id','category_id'];


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
