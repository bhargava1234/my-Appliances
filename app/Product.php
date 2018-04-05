<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	
	protected $fillable = [
        'pro_appliance_id',
        'pro_external_id',
        'pro_title',
        'pro_description',
        'pro_image',
        'pro_category',
        'pro_price_amount',
        'pro_price_currency'
    ];
	
	public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }
}
