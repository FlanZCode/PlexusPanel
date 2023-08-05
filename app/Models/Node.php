<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'ram',
        'ram_unit',
        'storage',
        'storage_unit',
        'cores',
    ];
}
