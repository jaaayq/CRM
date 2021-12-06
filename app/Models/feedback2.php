<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class feedback2 extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        't1',
        't2',
        'AOS1',
        'AOS2',
        'QOS1',
        'QOS2',
        'UTM1',
        'CTT1',
        'RIP1',
        'SAT1',
        'SAT2'
    ];
}
