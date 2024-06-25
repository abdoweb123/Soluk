<?php

namespace App\Models;

use Modules\Parent\Entities\Model as Parents;
use Modules\Program\Entities\Model as Program;


class Favorite extends BaseModel
{
    protected $guarded = [];

    protected $table = 'favorites';


    public function parent()
    {
        return $this->hasMany(Parents::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }


} //end of class
