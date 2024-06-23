<?php

namespace App\Models;

use App\Observers\EmployeeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([EmployeeObserver::class])]
class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employee_number';

    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function insuranceClass()
    {
        return $this->belongsTo(InsuranceClass::class);
    }

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function degrees()
    {
        return $this->hasMany(Degree::class);
    }
}
