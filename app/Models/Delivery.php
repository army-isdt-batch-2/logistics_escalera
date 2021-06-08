<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Delivery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "deliveries";

    protected $fillable = [
        'distribution_id',
        'transportation_id',
        'date_distributed',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}
