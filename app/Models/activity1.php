<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class activity1 extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'activity_status',
    ];



    protected $dates = ['deleted_at'];
}
