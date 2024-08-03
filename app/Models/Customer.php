<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'db_customer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fullname',
        'username',
        'password',
        'address',
        'phone',
        'email',
        'status',
        'token'
    ];
    public $timestamps = false;
}
