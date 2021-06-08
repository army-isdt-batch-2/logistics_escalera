<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "assets";

    protected $fillable = [
        'name',
        'description',
        'category',
        'supplier_id',
        'storage_id',
        'total_stocks',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}
