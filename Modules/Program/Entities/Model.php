<?php

namespace Modules\Program\Entities;

use App\Models\BaseModel;
use Modules\ServiceDetail\Entities\Model as ServiceDetail;

class Model extends BaseModel
{
    protected $guarded = [];

    protected $table = 'programs';

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class,'program_id');
    }

} //end of class
