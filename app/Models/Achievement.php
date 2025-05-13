<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'title',
        'description',
        'author',
        'date',
        'image',
        'file',
        'type',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'type' => 'string',
        'date' => 'date',
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
