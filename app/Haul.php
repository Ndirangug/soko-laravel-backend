<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haul extends Model
{
    // override default primary key 'id'
    protected $primaryKey = 'haulID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'pickup', 'destination', 'begin_time', 'end_time', 'driverID'
    ];

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'pickup' => 'array',
        'destination' => 'array',
        'begin_time' => 'datetime',
        'end_time' => 'datetime',
        'driverID' => 'int',
    ];

    public function packageMovements()
    {
        return $this->hasMany(PackageMovement::class);
    }
}
