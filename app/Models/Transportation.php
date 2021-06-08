<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transportation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "transportation";

    protected $fillable = [
        'plate_number',
        'driver_name',
        'driver_contact',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
    
}
