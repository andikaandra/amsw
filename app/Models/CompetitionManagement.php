<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetitionManagement extends Model
{
    protected $table = 'competition_management';
    
    // protected $fillable = ['name', 'waves', 'current_wave', 'registration_status',
    //     'submission_status', 'registration_amount', 'final_amount'];
    protected $guarded = [];
    
}
