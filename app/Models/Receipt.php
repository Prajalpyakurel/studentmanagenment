<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['phone', 'amount_received', 'payment_date'];

    public function admission()
    {
        return $this->belongsTo(Admission::class, 'phone', 'phone');
    }
}
