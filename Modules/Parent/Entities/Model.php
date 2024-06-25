<?php

namespace Modules\Parent\Entities;

use App\Models\City;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Model extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guarded = [];

    protected $table = 'parents';

    protected $casts = ['email_verified_at' => 'datetime'];


    public function DeviceTokens()
    {
        return $this->hasMany(DeviceToken::class, 'parent_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

} //end of class
