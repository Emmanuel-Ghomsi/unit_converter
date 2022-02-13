<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function device1() {
        return $this->belongsToMany(Device::class, 'convertion', 'device_id_1', 'device_id_2');
    }

    public function device2() {
        return $this->belongsToMany(Device::class, 'convertion', 'device_id_2', 'device_id_1');
    }
}
