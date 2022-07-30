<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'english',
        'mathematics',
        'biology',
        'chemistry',
        'physics',
        'irk',
        'crk',
        'agric',
        'lit',
        'economics',
        'commerce',
        'government',
        'geography',
        'accountring',
        'yoruba',
        'computer',
        'civic',
    ];

   

    
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}