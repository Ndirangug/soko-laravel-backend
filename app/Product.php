<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     // override default primary key 'id'
     protected $primaryKey = 'productID';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */

     protected $fillable = [
         'title', 'description_summary', 'image1', 'image2', 'image3', 'image4', 'image5', 'price', 'rating', 'specifications_document', 'description_document', 'sku', 'variation', 'offer_type', 'offer_amount', 'shipping_from', 'brand', 'sellerID'
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
         'price' => 'double',
         'rating' => 'int',
         'variation' => 'array',
         'offer_type' => 'array',
         'offer_amount' => 'double',
     ];

     public function orderItems()
     {
         return $this->hasMany(OrderItem::class);
     }
}
