<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Parent\Entities\Model as Parents;
use Modules\Program\Entities\Model as Program;

class Children extends BaseModel
{
    protected $guarded = [];

    protected $table = 'children';


    /*** Start relations ***/
    public function parent() : belongsTo
    {
        return $this->belongsTo(Parents::class);
    }

    public function programs() : belongsToMany
    {
        return $this->belongsToMany(Program::class,'children_programs','child_id','program_id');
    }


} //end of class
