<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $table = 'laboratories';

    protected $fillable = [
        'name',
        'description',
        'academic_days',
        'academic_hours',
        'collaborative_hours',
        'images',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'academic_days' => 'array',
        'images' => 'array',
    ];

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
