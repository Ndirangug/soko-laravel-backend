<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Driver extends Authenticatable
{
    use Notifiable;

    // override default primary key 'id'
    protected $primaryKey = 'driverID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'email', 'national_id', 'password', 'sex', 'phone', 'county', 'town', 'photo', 'whatsapp', 'vehicle_reg_number', 'vehicle_type', 'vehicle_description', 'vehicle_photo', 'shipperID'
    ];

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'shipperID' => 'int',
    ];

    public function hauls()
    {
        return $this->hasMany(Haul::class);
    }
}
