<?php

namespace Modules\ServiceDetail\Entities;

use App\Models\BaseModel;
use Modules\Service\Entities\Model as Service;
use Modules\Beneficiary\Entities\Model as Beneficiary;
use Modules\Center\Entities\Model as Center;
use Modules\Program\Entities\Model as Program;

class Model extends BaseModel
{
    protected $guarded = [];

    protected $table = 'service_details';


    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }
}
