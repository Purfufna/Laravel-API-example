<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    protected $fillable =  ['username', 'score', 'created_at', 'updated_at'];
    protected $table = 'leaderboard';
}