<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolmodel extends Model
{
    protected $fillable = [
        'schoolname', 'schoolid', 'periodfrom', 'periodto', 'email', 'contactnumber',
    ];
}
