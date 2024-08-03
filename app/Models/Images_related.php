<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images_related extends Model
{
    use HasFactory;

    protected $table = 'db_imgs_relate';
    protected $primaryKey ='id';
    protected $fillable = ['maSP', 'name'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'maSP', 'id');
    }
}


