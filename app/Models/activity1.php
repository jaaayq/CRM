<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class activity1 extends Model
{
    use HasFactory, HasApiTokens, SoftDeletes;

    protected $fillable = [
        'activityname',
        'activity_status',
        'activitydate',
        'date_finished',
        'activitydescription',
        'activitycode'
    ];



    protected $dates = [
        
        'deleted_at'
       



];
}
