<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pujk extends Model
{
    use HasFactory;
    protected $table = 'pujk';
    protected $guarded = ['id'];
}
