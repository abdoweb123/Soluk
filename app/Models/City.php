<?php

namespace App\Models;

use Modules\Parent\Entities\Model as Parents;


class City extends BaseModel
{
    protected $guarded = [];

    protected $table = 'cities';


    public function parent()
    {
        return $this->hasMany(Parents::class);
    }


} //end of class
