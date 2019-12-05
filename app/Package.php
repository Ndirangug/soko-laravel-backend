<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
   // override default primary key 'id'
   protected $primaryKey = 'packageID';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

   protected $fillable = [
       'time_received', 'source', 'destination', 'review', 'rating'
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
       'rating' => 'int',
       'time_received' => 'datetime',
       'source' => 'array',
       'destination' => 'array',
   ];

   public function packageMovements()
   {
       return $this->hasMany(PackageMovement::class);
   }

   public function orderItems()
     {
         return $this->hasMany(OrderItem::class);
     }
}
