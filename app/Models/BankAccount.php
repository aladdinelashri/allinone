<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['account_number','accountbanktype_id','currency_id','bank_branche_id','interest_rate','start_date','end_date','IsActive'  ];



    protected $guarded = [
        'id'
    ];

}
