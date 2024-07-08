<?php

namespace App\Models\Circular;

use App\Models\Attributes\JobTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularJobtype extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'job_type_id'];


    public function jobtype()
    {
        return $this->hasOne(JobTypes::class, 'id', 'job_type_id');
    }
}
