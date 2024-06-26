<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerLevel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'user_id', 'edit_user_id'];
}
