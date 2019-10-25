<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name','county_id'];
    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
