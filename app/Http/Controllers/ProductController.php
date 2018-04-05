<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
class ProductController extends Controller
{
   public function dishwashers()
    {
		$dishwashers = DB::table('products')->where('pro_category', '=', 'dishwasher')->get();
        
		///print_r($dishwashers);die;
        return View::make('product.list')
            ->with('appliances', $dishwashers);
    }
	public function smallAppliances()
    {
		$dishwashers = DB::table('products')->where('pro_category', '=', 'Small Appliances')->get();
        
		///print_r($dishwashers);die;
        return View::make('product.list')
            ->with('appliances', $dishwashers);
    }
}
