<?php

namespace App\Models\Circular;

use App\Models\Attributes\CareerLevel;
use App\Models\Attributes\JobTypes;
use App\Models\Attributes\Skill;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'start_date',
        'end_date',
        'category_id',
        'user_id',
        'company_id',
        'organization_name',
        'organization_website',
        'apply_link',
        'vacancy',
        'min_salary',
        'max_salary',
    ];
    protected $dates = ['start_date', 'end_date'];

    public function categories()
    {
        return $this->hasMany(CircularCategory::class);
    }
    public function category()
    {
        return $this->hasOne(category::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function educations()
    {
        return $this->hasMany(CircularEducation::class);
    }
    public function jobskills()
    {
        return $this->belongsToMany(Skill::class,'circular_skills');
    }
    public function skills()
    {
        return $this->hasMany(CircularSkill::class);
    }
    public function jobindustries()
    {
        return $this->hasMany(CircularJobIndustry::class);
    }
    public function careerlabels()
    {
        return $this->hasMany(CircularCareerlabel::class);
    }
    public function salaryperiods ()
    {
        return $this->hasMany(CircularSalaryperiod::class);
    }
    public function jobtypes()
    {
        return $this->hasMany(CircularJobtype::class);
    }
    // public function jobtypes()
    // {
    //     return $this->belongsToMany(JobTypes::class,'circular_jobtypes');
    // }


    public function jobcareerlabels()
    {
        return $this->belongsToMany(CareerLevel::class,'circular_careerlabels');
    }


    public function latestCircular(){
        return Circular::where('category_id',$this->category_id)->latest()->take(5)->get();
    }

}
