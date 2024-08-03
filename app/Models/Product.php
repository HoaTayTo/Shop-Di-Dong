<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producer;
use App\Models\Images_related;
class Product extends Model
{
    use HasFactory;

    protected $table = 'db_product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'catid',
        'name',
        'alias',
        'avatar',
        'img',
        'sortDesc',
        'detail',
        'producer',
        'number',
        'number_buy',
        'sale',
        'price',
        'price_sale',
        'created',
        'created_by',
        'modified',
        'modified_by',
        'trash',
        'status',
        'idcustomer',
        'mota'
    ];

    // ------------------------------HÀM XỬ LÝ GIẢM GIÁ---------------------------
    public function getDiscountedPrice()
    {
        return $this->price * (1 - $this->sale / 100);
    }
    public function phukien()
    {
    return $this->hasMany(Phukien::class, 'maSP', 'id');
    }
    public function config_Products()
    {
     return $this->hasMany(Config_products::class, 'maSP', 'id');
    }
    public function images_Related()
    {
        return $this->hasMany(Images_related::class, 'maSP', 'id');
    }
    public $timestamps = false;
    public function Producer()
    {
        return $this->belongsTo(Producer::class ,'producer', 'id');
    }
    public function category(){
        return $this->belongsTo(category::class,'catid','id');
    }
}
