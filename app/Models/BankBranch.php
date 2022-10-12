<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BankBranch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name','code','phonecode',];
    protected $guarded = [
        'id'
    ];


    public function owner()
    {
        return $this->belongsTo(Bank::class, 'owner_id');
    }
}
