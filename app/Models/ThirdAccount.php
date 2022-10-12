<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ThirdAccount extends Model
{
    use HasFactory;
    use  SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'type', 'IsActive',

    ];
    protected $guarded = array('name', 'type', 'IsActive',);
}
