<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Distribution extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "distribution";

    protected $fillable = [
        'requestor_name',
        'requestor_contact',
        'purpose',
        'asset_id',
        'quantity',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}
