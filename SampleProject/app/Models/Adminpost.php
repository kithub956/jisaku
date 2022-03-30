<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminpost extends Model
{
    use HasFactory;
    protected $table = 'adminposts';
    protected $fillable =
    [
        'name',
        'title',
        'content',
        'member_id',
        'category',
    ];
}
