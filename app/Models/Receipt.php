<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['phone', 'amount_received', 'payment_date', 'payment_method', 'bank_name', 'transaction_id'];

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'phone', 'phone');
    }

    protected $casts = [
        'payment_date' => 'datetime',
    ];
}
