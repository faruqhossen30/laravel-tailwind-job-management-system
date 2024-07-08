<?php

namespace App\Models\Circular;

use App\Models\Attributes\Education;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularEducation extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'education_id'];


    public function education()
    {
        return $this->hasOne(Education::class, 'id', 'education_id');
    }
}
