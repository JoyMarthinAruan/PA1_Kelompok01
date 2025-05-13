<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student',
        'content',
        'image',
        'is_active',
        'created_by',
        'updated_by',
    ];

    // Relasi ke admin yang membuat
    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    // Relasi ke admin yang mengedit
    public function updater()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
