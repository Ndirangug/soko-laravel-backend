<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // override default primary key 'id'
    protected $primaryKey = 'orderID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'amount_to_pay', 'is_paid', 'outstanding_amount', 'customerID'
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
        'amount_to_pay' => 'double',
        'outstanding_amount' => 'double',
        'is_paid' => 'bool',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function orderItems()
     {
         return $this->hasMany(OrderItem::class);
     }
}
