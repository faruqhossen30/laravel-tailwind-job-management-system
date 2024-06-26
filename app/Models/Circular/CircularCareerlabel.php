<?php

namespace App\Models\Circular;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularCareerlabel extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'career_label_id'];
}
