<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Producer extends Model
{
    use HasFactory;
    protected $table ='db_producer';
    protected $primaryKe = 'id';
    protected $fillable = [
        'name', 'code', 'keyword', 'created_at', 'created_by', 'modified', 'modified', 'status', 'trash'
    ];
    public $timestamps = false;
}
