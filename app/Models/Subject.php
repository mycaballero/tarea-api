<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'id',
        'teacherId',
        'name',
        'description'
    ];

    protected $hidden = [
        "updated_at",
        "deleted_at"
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'id', 'teacherId');
    }

    public function homeworks()
    {
        return $this->hasMany(Homework::class, 'subjectId', 'id');
    }
}
