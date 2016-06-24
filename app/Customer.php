<?php
/**
 * Created by PhpStorm.
 * User: Christine
 * Date: 6/20/2016
 * Time: 3:24 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    public function orders(){
        return $this->hasMany("App\Order","primary_key");
    }
}