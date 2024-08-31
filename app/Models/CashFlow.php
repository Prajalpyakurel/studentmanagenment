<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'source',
        'amount',
        'balance',
        'category',
        'description',
        'date',
    ];
    protected $casts = [
        'date' => 'date',
    ];

    protected static function booted()
    {
        static::creating(function ($cashFlow) {
            // Get the latest balance from the same source (cash or bank)
            $lastCashFlow = static::where('source', $cashFlow->source)
                                ->orderBy('created_at', 'desc')
                                ->first();

            $previousBalance = $lastCashFlow ? $lastCashFlow->balance : 0;

            // Calculate the new balance
            if ($cashFlow->type === 'inward') {
                $cashFlow->balance = $previousBalance + $cashFlow->amount;
            } else {
                $cashFlow->balance = $previousBalance - $cashFlow->amount;
            }
        });
    }
}
