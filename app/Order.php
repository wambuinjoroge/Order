<?php
/**
 * Created by PhpStorm.
 * User: Christine
 * Date: 6/23/2016
 * Time: 9:58 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
   public function customers(){
       return $this->belongsTo("App\Customer","foreign_key");

   }

}