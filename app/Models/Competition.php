<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    
    protected $table = 'competition';
    
    protected $fillable = ['type', 'payment_status', 
        'competition_status', 'verification_status', 'wave', 'user_id'];

    

}
