<?php

namespace Modules\Parent\Entities;

use \Modules\Parent\Entities\Model as Parents;

class DeviceToken extends \App\Models\BaseModel
{
    protected $guarded = [];

    protected $table = 'parent_device_tokens';

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

}//end of class
