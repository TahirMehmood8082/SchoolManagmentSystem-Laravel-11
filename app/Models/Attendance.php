<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'date', 'status'];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
