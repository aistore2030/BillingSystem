<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = ['product_name','hsn_code','product_price'];

    public function billdetail()
    {
        return $this->hasMany(BillDetail::class);
    }
}
