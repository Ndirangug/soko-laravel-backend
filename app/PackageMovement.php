<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageMovement extends Model
{
    // override default primary key 'id'
    protected $primaryKey = 'package_movementID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'packageID', 'haulID'
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
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'packageID' => 'int',
        'haulID'  => 'int'
    ];

}
