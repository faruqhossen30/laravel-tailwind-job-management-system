<?php

namespace App\Models\Circular;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularEducation extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'education_id'];
}
