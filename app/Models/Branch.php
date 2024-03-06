<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'tblbranch';

    protected $fillable = [
        'city_id',
        'code',
        'name',
        'head',
        'category',
        'phone',
        'created',
        'till_date',
        'address',
        'profile_image',
        'c_address',
        'email',
        'password',
        'status',
        'reset_otp',
        'reset_otp_timestamp'
    ];

    protected $hidden = [
        'password',
        'reset_otp'
    ];

    protected $dates = [
        'created',
        'till_date',
        'created_at',
        'reset_otp_timestamp'
    ];

    protected $casts = [
        'category' => 'string',
        'status' => 'string',
    ];

    // Define any relationships if needed
    // For example, if a branch belongs to a city
    // public function city()
    // {
    //     return $this->belongsTo(City::class, 'city_id');
    // }
}
