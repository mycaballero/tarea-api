<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'id',
        'subjectId',
        'title',
        'description',
        'qualification',
        'note'
    ];

    protected $hidden = [
        "updated_at",
        "deleted_at"
    ];

    public function subjects()
    {
        return $this->belongsTo(Subject::class,'id', 'subjectId');
    }
}
