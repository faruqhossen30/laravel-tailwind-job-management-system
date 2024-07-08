<?php

namespace App\Models;

use App\Models\Circular\Circular;
use App\Models\Portfolio\Portfolio;
use App\Models\Portfolio\PortfolioCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','type','thumbnail','author_id','status'];

    public function circulars(){
        return $this->hasMany(Circular::class);
    }
}
