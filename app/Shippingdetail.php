<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippingdetail extends Model
{
    protected $fillable = ['name','billing_address','country','county','area','delivery_address','phone'];
}
