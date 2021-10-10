@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Order Detail</h2>
</div>
	<style type="text/css">
		table{margin: 0;padding:5px;font-size: 16px;}
		.bor-bot{border-bottom: 1px solid #eee;}
		h1,h2,h3,h4,h5,h6{margin: 0;padding:5px;font-weight: 600;}
		h1{color: orange; font-weight: 300;}
		h5{font-size:16px;}
		h4{padding-top: 5px;}
		p{padding:5px;}
		.mar-bot-5{margin-bottom: 5px;}
		.mar-bot-10{margin-bottom: 10px;}
		.mar-bot-20{margin-bottom: 20px;}
		.mar-bot-30{margin-bottom: 30px;}
		.mar-top-10{margin-top: 10px;}
		.mar-top-20{margin-top: 20px;}
		.mar-top-30{margin-top: 30px;}
		.clr-org{color: #ff580f;}
		.bg-org{background: #ff580f;}
		.clr-wht{color: #fff;}
		img {
		  position: absolute;
		  top: 5px;
		  left: 25px;
		}
		.imgA1 {
		  z-index: 1;
		  color: #ffff;
		}
		#cancel {
		  z-index: 3;
		    }
		    .body{height:480px; }
	</style>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="row clearfix">
                    <div class="body">
                    
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<h1 class="mar-bot-10 clr-org" style="font-size: 24px;">{{ $viewcustomer->fname.' '. $viewcustomer->lname}}</h1>
							<p class="mar-bot-10"><b>Order ID <span style="margin-left: 20px; margin-right: 10px;">:</span> {{$vieworder->order_id}}</b></p>
							<p class="mar-bot-10">Mobile no <span style="margin-left: 14px; margin-right: 10px;">:</span> {{ $viewcustomer->mobile_no }}</p>
							<p class="mar-bot-10">Email ID <span style="margin-left: 22px; margin-right: 10px;">:</span>  {{ $viewcustomer->email }}</p>
							<p class="mar-bot-10">City <span style="margin-left: 48px; margin-right: 10px;">:</span>  {{ $viewcustomer->city }}</p>
							<p class="mar-bot-10">State <span style="margin-left: 38px; margin-right: 10px;">:</span>  {{ $viewcustomer->state }}</p>
						
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 image">
							<img src="{{$vieworder->prescription_path}}" height="200px; width
							200px;" onclick="change();" id="change"><img src="{{ asset('public/template_code/images/circle-close-128.png') }}" width="20" height="20" alt="User" class="imgA1" onclick="Revert();"/></div>
						</div>				
							

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">	
function change()
{
document.getElementById("change").height="400";
document.getElementById("change").width="400";
}
function Revert()
{
document.getElementById("change").height="200";
document.getElementById("change").width="200";
}						
									
			
</script>	

@endsection