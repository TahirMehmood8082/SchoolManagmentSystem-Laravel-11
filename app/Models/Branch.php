<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['name',
        'address',
        'school_id',
        'phone_number',
        'principal_id',
        'branch_code',];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'branch_id');
    }
}
