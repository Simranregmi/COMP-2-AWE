<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'cds';

    protected $primarykey = 'id';
    protected $fillable = ['title', 'firstname', 'lastname', 'price', 'playlength'];
}
