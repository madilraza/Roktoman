<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ussers_message extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message',
    ];
}
