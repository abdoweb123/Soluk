<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Program\Entities\Model as Program;


class Topic extends BaseModel
{
    protected $guarded = [];

    protected $table = 'topics';


    /*** Start relations ***/

    public function programs()
    {
        return $this->belongsToMany(Program::class,'children_programs','topic_id');
    }


} //end of class
