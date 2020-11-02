<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Url extends Model
{
    use HasFactory;
    use SearchableTrait;

    protected $fillable = [
        'code', 'full_url'
    ];

}
