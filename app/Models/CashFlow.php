<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    protected $fillable = [
        'type', 'source', 'amount', 'balance', 'category', 'description', 'date'
    ];

    // Method to create an inward transaction
    public static function createInward($source, $amount, $category = null, $description = null, $date = null)
    {
        // If date is not provided, use the current date
        $date = $date ?? now();

        // Get the latest balance for the source
        $latestBalance = self::where('source', $source)->orderBy('date', 'desc')->first();
        $balance = $latestBalance ? $latestBalance->balance + $amount : $amount;

        return self::create([
            'type' => 'inward',
            'source' => $source,
            'amount' => $amount,
            'balance' => $balance,
            'category' => $category,
            'description' => $description,
            'date' => $date,
        ]);
    }

    // Method to create an outward transaction
    public static function createOutward($source, $amount, $category = null, $description = null, $date = null)
    {
        // If date is not provided, use the current date
        $date = $date ?? now();

        // Get the latest balance for the source
        $latestBalance = self::where('source', $source)->orderBy('date', 'desc')->first();
        $balance = $latestBalance ? $latestBalance->balance - $amount : -$amount;

        return self::create([
            'type' => 'outward',
            'source' => $source,
            'amount' => $amount,
            'balance' => $balance,
            'category' => $category,
            'description' => $description,
            'date' => $date,
        ]);
    }
}

