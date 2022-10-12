<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name','address_street_1','address_street_2','city','state', 'zip','phone', 'fax', 'user_id',];
    protected $guarded = [
        'id'
    ];


    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }
}

