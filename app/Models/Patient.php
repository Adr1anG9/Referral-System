<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'first_name',
        'surname',
        'dob',
        'email',
        'mobile_phone',
        'address',
        'status', // added this column to track the patient's status
    ];

    // Added this accessor to concatenate the full name of the patient
    public function getFullNameAttribute()
    {
        return $this->title . '' . $this->first_name . '' . $this->surname;
    }
}
