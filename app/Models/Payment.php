<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    
    protected $fillable = ['competition', 'file_path', 'payment_type', 'bank_account_name',
        'bank_name', 'amount', 'user_id'];

    
}
