<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorQuery extends Model
{
    use HasFactory;

    protected $table = 'distributor_queries';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'is_interested',
    ];
}
