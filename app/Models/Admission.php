<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = ['name', 'phone', 'course_id', 'total_fee', 'remaining_fee'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class, 'phone', 'phone');
    }
}


