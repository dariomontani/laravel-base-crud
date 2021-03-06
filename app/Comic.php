<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'author',
        'genre',
        'price',
        'description',
        'created_at',
        'updated_at'
    ];
}
