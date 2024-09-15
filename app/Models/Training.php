<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_name',
        'training_duration',
        'training_description',
        'training_category_id',
        'training_photo',
        'syllabus_pdf',
    ];

    public function category()
        {
            return $this->belongsTo(TrainingCategory::class, 'training_category_id');
        }


}
