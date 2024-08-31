<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    protected $fillable = [
        'type', 'source', 'amount', 'balance', 'category', 'description', 'date'
    ];

    // Method to create an inward transaction
    public static function createInward($source, $amount, $category = null, $description = null, $date)
    {
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
    public static function createOutward($source, $amount, $category = null, $description = null, $date)
    {
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

    // Method to update an inward transaction
    public function updateInward($source, $amount, $category = null, $description = null, $date)
    {
        $latestBalance = self::where('source', $source)->where('date', '<', $date)->orderBy('date', 'desc')->first();
        $balance = $latestBalance ? $latestBalance->balance + $amount - $this->amount : $amount - $this->amount;

        $this->update([
            'type' => 'inward',
            'source' => $source,
            'amount' => $amount,
            'balance' => $balance,
            'category' => $category,
            'description' => $description,
            'date' => $date,
        ]);
    }

    // Method to update an outward transaction
    public function updateOutward($source, $amount, $category = null, $description = null, $date)
    {
        $latestBalance = self::where('source', $source)->where('date', '<', $date)->orderBy('date', 'desc')->first();
        $balance = $latestBalance ? $latestBalance->balance - $amount + $this->amount : -$amount + $this->amount;

        $this->update([
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

