<?php

namespace App;
//Let's create the Book model,and  made the Book attributes mass assignable.
use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cost', 'quntity', 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}