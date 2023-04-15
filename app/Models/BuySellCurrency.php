<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuySellCurrency extends Model
{
    use HasFactory;
    protected $fillable = [
        'currency_id',
        'buy_amount',
        'sell_amount',
    ];
}
