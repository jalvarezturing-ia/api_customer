<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function user_info()
    {
        return $this->belongsTo(UserInfo::class);
    }

    public function course_info()
    {
        return $this->belongsTo(Course::class);
    }
}
