<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    protected $hidden = [
        "updated_at",
        "deleted_at"
    ];

    public function Subjects()
    {
        return $this->hasMany(Subject::class, 'teacherId', 'id');
    }
}
