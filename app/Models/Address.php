<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name','code','phonecode'];


    $table->string('name')->nullable();
    $table->string('address_street_1')->nullable();
    $table->string('address_street_2')->nullable();
    $table->string('city')->nullable();
    $table->string('state')->nullable();
    $table->foreignId('city_id')->constrained()->cascadeOnDelete();
    $table->string('zip')->nullable();
    $table->string('phone')->nullable();
    $table->string('fax')->nullable();
    $table->string('type')->nullable();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();





    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }
}

