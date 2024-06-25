<?php

namespace App\Models;

use Modules\Program\Entities\Model as Program;


class ChildrenProgram extends BaseModel
{
    protected $guarded = [];

    protected $table = 'children_programs';


    public function child()
    {
        return $this->belongsTo(Children::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }


    public function topics()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }


} //end of class
