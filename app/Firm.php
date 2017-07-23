<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
      protected $fillable = [
        'name', 'person_name', 'gst_number','email','billing_address','billing_city',
        'billing_state','billing_state_code','billing_pincode','billing_mobile_number'
        ,'billing_landline_number','shipping_address','shipping_city',
        'shipping_state','shipping_state_code','shipping_pincode','shipping_mobile_number'
        ,'shipping_landline_number'
    ];
    //
}
