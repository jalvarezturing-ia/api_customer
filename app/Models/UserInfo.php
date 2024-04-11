<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'country',
        'city',
        'company',
        'user_id',
        'plan_id',
        'eLearning_plan',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function plan()
    {
        return $this->hasOne(Plan::class);
    }
}
