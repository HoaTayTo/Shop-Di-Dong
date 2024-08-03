<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'db_orderdetail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'orderid', 'productid', 'count', 'price', 'trash', 'status'
    ];
    public $timestamps = false;
    public function Product()
    {
        return $this->belongsTo(Product::class,'productid','id');
    }
}

