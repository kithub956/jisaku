<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatpost extends Model
{
    use HasFactory;
    protected $table = 'chatposts';
    protected $fillable =
    [
        'name',
        'message',
    ];
}
