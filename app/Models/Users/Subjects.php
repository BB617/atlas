<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    const UPDATED_AT = null;


    protected $fillable = [
        'subject'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\Users\User', 'subject_users', 'subject_id', 'user_id')->withPivot('user_id', 'subject_id');
    }
}
