<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phukien extends Model
{
    use HasFactory;

    protected $table = 'db_phu_kien';
    protected $primaryKey = 'id';
    protected $fillable = ['maSP', 'name', 'img', 'price', 'price_sale', 'sale', 'number', 'description'];

    public function getDiscountedPrice()
    {
        return $this->price * (1 - $this->sale / 100);
    }
    public function phukien()
    {
        return $this->hasMany(Phukien::class, 'maSP', 'id');
    }
}
