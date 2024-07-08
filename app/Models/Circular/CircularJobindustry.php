<?php

namespace App\Models\Circular;

use App\Models\Attributes\JobIndustry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularJobIndustry extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'job_industry_id'];

    public function jobindustry()
    {
        return $this->hasOne(JobIndustry::class, 'id', 'job_industry_id');
    }
}
