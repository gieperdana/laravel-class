<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function orders()
    {
        return $this->hasMany('App\Pesanan');
    }
}
