<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeaves extends Model
{
    protected $table = 'annual_leaves';

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'description',
        'approve_status',
        'approve_user_id'
    ];
}
