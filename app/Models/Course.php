<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'topic',
        'index',
        'plan_id',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function plan()
    {
        return $this->hasOne(Plan::class);
    }
}
