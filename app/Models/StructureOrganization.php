<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureOrganization extends Model
{
    use HasFactory;

    protected $table = 'structureorganizations';

    protected $fillable = [
        'name',
        'title',
        'degree',
        'parent_id',
        'image',
        'created_by',
        'updated_by',
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
