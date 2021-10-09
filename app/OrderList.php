<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = 'order_lists';
    public function userList(){
    	return $this->belongTo('App\UserList');
    }
}
