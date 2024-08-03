<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'db_cart';
    protected $primaryKey = 'cartID';
    protected $fillable = ['customerID', 'ProductID', 'quality',];
    public $timestamps=false;
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customerID','id');
    }
    public function Product()
    {
        return $this->belongsTo(Product::class,'ProductID', 'id');
    }
}
