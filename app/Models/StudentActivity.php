<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentActivity extends Model
{
    use HasFactory;

    protected $table = 'studentactivities';

    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
        'created_by',
        'updated_by',
    ];
}
