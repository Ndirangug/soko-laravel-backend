<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Shipper extends Authenticatable
{
    use Notifiable;

    // override default primary key 'id'
    protected $primaryKey = 'shipperID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'shipper_name', 'phone', 'email', 'password', 'address_line1', 'address_line2', 'address_line3', 'counties', 'towns', 'category_a', 'category_b', 'category_c'
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
        'category_a' => 'bool',
        'category_b' => 'bool',
        'category_c' => 'bool',
        'email_verified_at' => 'datetime',
    ];

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
