<?php

namespace App\Models\Circular;

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
        'user_id',
        'company_id',
        'organization_name',
        'organization_website',
        'apply_link',
        'vacancy',
        'min_salary',
        'max_salary'
    ];
    protected $dates = ['start_date', 'end_date'];

    public function categories()
    {
        return $this->hasMany(CircularCategory::class);
    }
    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
    public function educations()
    {
        return $this->hasMany(CircularEducation::class);
    }
    public function skills()
    {
        return $this->hasMany(CircularSkill::class);
    }
    public function jobindustries()
    {
        return $this->hasMany(CircularJobindustry::class);
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

}
