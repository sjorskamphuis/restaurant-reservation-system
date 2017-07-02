<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationUserRole extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_id',
        'user_id',
        'role_id'
    ];

}
