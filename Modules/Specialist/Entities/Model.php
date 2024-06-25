<?php

namespace Modules\Specialist\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Program\Entities\Model as Program;


class Model extends Authenticatable
{
    protected $guarded = [];

    protected $table = 'specialists';


    public function programs()
    {
        return $this->hasMany(Program::class);
    }


} //end of class
