<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobIndustry extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'thumbnail', 'user_id', 'edit_user_id'];
}
