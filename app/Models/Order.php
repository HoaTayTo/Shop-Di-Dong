<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use DB;
class Order extends Model
{
    use HasFactory;
    
    protected $table = 'db_order';
    protected $primaryKey = 'id';
    protected $fillable = [
        'orderCode', 'customerid', 'orderdate', 'fullname', 'phone',
        'money', 'price_ship', 'coupon', 'province', 'district',
        'address', 'trash', 'status'
    ];
    public $timestamps = false;
    public function orders()
    {
    return $this->hasMany(OrderDetail::class, 'orderid', 'id');
    }
}
