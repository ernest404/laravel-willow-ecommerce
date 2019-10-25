<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{  public function user()
    {
        return $this->belongsTo(User::Class);
    }
    protected $fillable = ['billing_address','country','county','subcounty','delivery_address','phone'];

    
    
    
}
