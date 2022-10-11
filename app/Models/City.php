<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country_id', 'name'];
    protected $dates = ['deleted_at'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
