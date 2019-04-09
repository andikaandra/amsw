<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participant';
    
    // protected $fillable = ['name', 'file_path', 'competition_id'];

    protected $guarded = [];
}
