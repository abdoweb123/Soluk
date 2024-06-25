<?php

namespace Modules\Program\Entities;

use App\Models\BaseModel;
use App\Models\ChildrenProgram;
use App\Models\Favorite;
use App\Models\Topic;
use Modules\ServiceDetail\Entities\Model as ServiceDetail;
use Modules\Specialist\Entities\Model as Specialist;

class Model extends BaseModel
{
    protected $guarded = [];

    protected $table = 'programs';


    /*** Start Relations ***/
    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class,'program_id');
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class,'specialist_id');
    }

    public function favorite()
    {
        return $this->hasOne(Favorite::class,'program_id');
    }

    public function childPrograms()
    {
        return $this->hasMany(ChildrenProgram::class,'program_id');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class,'children_programs','program_id','topic_id');
    }


} //end of class
