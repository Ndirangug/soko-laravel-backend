<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // override default primary key 'id'
    protected $primaryKey = 'paymentID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'amount', 'paid_by', 'transaction_code', 'mode_of_payment', 'orderID'
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
        'amount' => 'double',
        'orderID' => 'int'
    ];
}
