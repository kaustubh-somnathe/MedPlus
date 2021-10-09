<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use App\Services\PayUService\Exception;
use App\UserList;
use App\OrderList;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

public function weblogin(){
    return view('auth.weblogin');
}
 
public function webregister(Request $request){
    if($request->post()){
    $otp = rand(000000, 999999);
    // dd($x);
        $input = $request->all();
        $regData= new UserList();
        $regData->fname = $input['fname'];
        $regData->lname = $input['lname'];
        $regData->mobile_no = $input['mobile_no'];
        $regData->email = $input['email'];
        $regData->password = $input['password'];
        $regData->city = $input['city'];
        $regData->state = $input['state'];
        $regData->status = 'Pending';
        $regData->otp = $otp;
        if($regData->save()){
            $data = UserList::get()->last();
            return view('auth.otp',['data' => $data]);
        }

    }
}

public function otpverify(Request $request){
    if($request->post()){
        $input = $request->all();
        $id = $input['id'];
        $otp = $input['otp'];

        $otpdata = UserList::where('id',$id)->get()->last();
        if( $otp == $otpdata->otp){
            $otpdata->status = 'Active';
            $otpdata->update();
            $msg ="OTP Verify Successfully.";
            return view('website.verifymsg');
        }elseif(!$otpdata){
            $msg ="OTP Not Verify.";
            return view('auth.otp');
        }
    }
}




public function noverify(Request $request){
    if($request->post()){
        $input = $request->all();
        $number = $input['number'];
        $user = UserList::where('mobile_no',$number)->get()->last();
        if(!$user){
             return view('website.notverify');                 
        }else{
            if($user->mobile_no == $number){
                $cust = UserList::where('mobile_no',$number)->get()->last();
                return view('website.prescription',['cust' => $cust]);
            }                
        }
    }
}



 public function order(Request $request){
    if($request->post()){
        $potp = rand(000000, 999999);
        $input = $request->all();
        $customer = UserList::where('id',$input['customer_id'])->get();
        $order= new OrderList();
        $order->customer_id = $input['customer_id'];
        $order->order_id =$this->orderid();
        $order->date = date("Y-m-d");
        $order->potp = $potp;
        $order->prescription_path = !empty($request->file('prescription_path')) ? $this->imageupload($request->file('prescription_path'), 'uploads') : null; 
        // dd($order->order_id);
        if($order->save()){
            $data = OrderList::where('id',$input['customer_id'])->get()->last();
            return view('website.prescriptionOTP',['data' => $data]);
        }
    }
}       
 

       
 public function potpverify(Request $request){
    if($request->post()){
        $input = $request->all();
        $id = $input['potp'];
        $otp = $input['otp'];
        $potpdata = OrderList::where('potp',$otp )->get()->last();
        // dd($potpdata);
        if(!$potpdata){
            $msg ="OTP Not Verify.";
            dd($msg);
        }else{
            if($otp == $potpdata->potp){
                $oderData = OrderList::where('potp',$otp )->get()->last();
                $oderData->status = 'Active';
                $oderData->update();
                return view('website.orderplace',['oderData' => $oderData]);
                
            }
        }
    }
       

}     


 protected function imageupload($selectedimage, $folder){
    $imgpath = null;
    $image = $selectedimage;
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/'.$folder);
    if($image->move($destinationPath, $input['imagename'])){
        $imgpath = url('/public/images/'.$folder)."/".$input['imagename'];
    }
    return $imgpath;
}
    

protected function orderid(){
    $id = "mdor";
    $year = date("Y");
    $mo = date('m');
    $d = date('d');
    $h = date('H');
    $mi = date('mi');
    $se = date('s');

    $orderid = $id."".$year."".$mo."".$d."".$h."".$mi."".$se;

    return $orderid;
}   

 

}


