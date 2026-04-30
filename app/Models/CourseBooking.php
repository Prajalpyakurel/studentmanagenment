<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'user_id',
        'name',
        'email',
        'phone',
        'status',
        'notes',
        'payment_method',
        'payment_status',
        'esewa_transaction_uuid',
        'esewa_ref_id',
        'amount_paid',
        'paid_at',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
        'amount_paid' => 'decimal:2',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isPaid(): bool
    {
        return $this->payment_status === 'paid';
    }
}
