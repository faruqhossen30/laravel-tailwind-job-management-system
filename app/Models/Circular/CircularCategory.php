<?php

namespace App\Models\Circular;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularCategory extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'category_id'];
}
