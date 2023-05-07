<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $table = 'Teachers';
    protected $fillable = [
        'name',
        'email', 
        'address', 
        'password'
    ];
}
