<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submission';
    
    protected $fillable = ['title', 'description', 'file_path', 'competition_id',
        'competition_user_id'];

}
