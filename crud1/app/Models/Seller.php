<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData()
    {
        return $this->hasOne('App\Models\Product');
        // return $this->hasOne('App\Models\Product','owner_id'); // if the id name is differ in data base also define the id name in model where we use 

    }
}
