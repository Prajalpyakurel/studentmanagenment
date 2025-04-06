<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'notes'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
