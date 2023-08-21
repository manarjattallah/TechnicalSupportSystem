<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    protected $fillable = [
        'requesting_party',
        'problem_owner',
        'request_date',
        'status',
        'receipt_date',
        'maintenance_place',
        'responsible_technician',
        'delivery_date',
        'procedures',
    ];

    protected $dates = ['request_date', 'receipt_date', 'delivery_date'];

    // Define relationships, if needed
}
