<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'date_admission',
        'branch_id',
        'enrollment',
        'course',
        'till_date',
        'name',
        'father_name',
        'father_occupation',
        'student_dob',
        'gender',
        'profile_image',
        'address1',
        'address2',
        'state_id',
        'district_id',
        'phone',
        'wphone',
        'email',
        'pqualification',
        'qualification',
        'student_status',
        'created_by',
        'status',
        'approve',
    ];

   
}