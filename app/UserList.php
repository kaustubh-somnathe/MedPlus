<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
	protected $table = 'user_lists';
    public function orderList(){
    	return $this->hasMany('App\OrderList','customer_id');
    }
}
