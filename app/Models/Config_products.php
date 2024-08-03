<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config_products extends Model
{
    use HasFactory;

    protected $table = 'db_config_products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'maSP', 'screen',
         'operating_system',
         'camera_front',
        'camera_behind',
        'chip',
        'ram',
        'capacity',
        'pin',
        'CPU',      // Sửa lại 'CPU'
        'O_cung',
        'card_',
        'design',
        'KTKL',
        'time_debut',
        'led',
        'SSD'
    ];
}
