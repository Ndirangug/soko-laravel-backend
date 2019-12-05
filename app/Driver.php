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
        'first_name', 'middle_name', 'last_name', 'email', 'password', 'address_line1', 'address_line2', 'address_line3', 'phone', 'residence', 'photo', 'facebook_url', 'twitter_url', 'instagram_url', 'whatsapp', 'pinterest_url', 'sex', 'national_id_number', 'vehicle_reg_number', 'vehicle_class', 'vehicle_description', 'vehicle_photo', 'shipperID'
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
    ];

    public function hauls()
    {
        return $this->hasMany(Haul::class);
    }
}