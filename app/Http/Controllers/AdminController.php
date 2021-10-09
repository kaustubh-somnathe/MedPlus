<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use App\Services\PayUService\Exception;
use App\User;
use App\UserList;
use App\OrderList;
use App\MedDirectory;


class AdminController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }




public function home(){   
    return view('home');
} 

public function customerlist(){
    $customers = UserList::orderBy('id','ASC')->get();
    return view('dashboard.customerlist',['customers' => $customers]);
}

public function viewcustomer($id=null){
    $viewcustomer = UserList::where('id',$id)->get()->first();
    return view('dashboard.viewcustomer',['viewcustomer' => $viewcustomer]);
}

public function orderlist(){
    $customers = UserList::orderBy('id','ASC')->get();
    $order = OrderList::orderBy('id','ASC')->get();
    // dd($order);
    return view('dashboard.listorder',['order' => $order,'customers' => $customers]);
}

public function vieworder($id=null){
    $vieworder = OrderList::where('order_id',$id)->get()->last();
    $viewcustomer = UserList::where('id',$vieworder->customer_id)->get()->last();
    return view('dashboard.vieworder',['vieworder' => $vieworder,'viewcustomer' => $viewcustomer]);
}
public function userlist(){
    $users = User::orderBy('id','ASC')->get();
    return view('dashboard.userlist',['users' => $users]);
}

public function med_dictionary(Request $request){
    if($request->post()){
        $input = $request->all();
        $med_data = new MedDirectory;
        $med_data->med_name = !empty($input['med_name']) ? $input['med_name'] : null;
        $med_data->mfg_name = !empty($input['mfg_name']) ? $input['mfg_name'] : null;
        $med_data->content = !empty($input['content']) ? $input['content'] : null;
        $med_data->mg_ml = !empty($input['mg_ml']) ? $input['mg_ml'] : null;
        $med_data->MRP = !empty($input['MRP']) ? $input['MRP'] : null;
        if($med_data->save()){
            $med_dictionary = MedDirectory::orderBy('id','DEC')->get();
            return view('dashboard.med_dictionary',['med_dictionary' => $med_dictionary]);
        }
    }
    $med_dictionary = MedDirectory::orderBy('id','DEC')->get();
    return view('dashboard.med_dictionary',['med_dictionary' => $med_dictionary]);

}

}