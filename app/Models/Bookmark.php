<?php

namespace App\Models;

use App\Models\Circular\Circular;
use App\Models\Circular\CircularJobtype;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable =[

        'user_id',
        'circular_id',
    ];

    // public function circular(){
    //     return Bookmark::with('circular')->where('circular_id', Auth()->user()->id)->latest()->get();
    // }
    public function circular(){
        return $this->hasOne(Circular::class,'id','circular_id');
    }

    public function jobtypes()
    {
        return $this->hasMany(CircularJobtype::class);
    }
}
