<?php

namespace App\Models\Circular;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularJobtype extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'job_type_id'];
}
