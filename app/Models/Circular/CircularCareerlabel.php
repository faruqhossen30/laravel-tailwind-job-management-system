<?php

namespace App\Models\Circular;

use App\Models\Attributes\CareerLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularCareerlabel extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'career_label_id'];

    public function jobcareerlables()
    {
        return $this->hasOne(CareerLevel::class, 'id', 'career_label_id');
    }
}
