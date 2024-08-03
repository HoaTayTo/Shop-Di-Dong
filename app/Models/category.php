<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'db_category';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'link',
        'level',
        'parentid', 'orders', 'created_at', 'created_by', 'updated_at', 'updated_by', 'trash', 'status'
    ];

}
