<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convertion extends Model
{
    use HasFactory;

    protected $table = 'convertion';

    protected $fillable = ['rate', 'device_id_1', 'device_id_2'];
}
