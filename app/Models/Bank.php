<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bank extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    public function bankbranchs()
    {
        return $this->HasMany(Bank::class, 'bank_id');
    }
}
