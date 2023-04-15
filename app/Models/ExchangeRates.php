<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model
{
    use HasFactory;
    protected $fillable = [
        'currency_id_send',
        'currency_id_receive',
        'usd',
        'bdt',
        'researve',
        'usdbdt',
    ];
}
