<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'age'];

    function setNameAttribute($val)
    {
        $this->attributes['name'] = ucfirst($val);
    }

    function setPhoneAttribute($val)
    {
        $this->attributes['phone'] = "+91-" . $val;
    }
}
