<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    
    protected $table = 'competition';

    // protected $fillable = ['user_id', 'type', 'payment_status', 'verification_status', 'competition_status',
    // 'wave'];
    
    protected $guarded = [];


    public function participants() {
        return $this->hasMany('App\Models\Participant');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    

}
