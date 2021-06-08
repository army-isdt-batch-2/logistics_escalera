<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Storage extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = "storage";

    protected $fillable = [
        'name',
        'building',
        'floor',
        'room',
        'cabinet',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}
