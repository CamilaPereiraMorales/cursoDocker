<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    /**
     * The attributes that are mass asignable
     * 
     * @var array
     */
protected $fillable = [
    'email',
];

}
