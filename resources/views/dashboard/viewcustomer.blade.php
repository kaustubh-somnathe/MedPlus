@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Customer</h2>
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
	</style>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="row clearfix">
                    <div class="body">
                    	
						<div style="margin-left: 40px;">
							<h1 class="mar-bot-10 clr-org" style="font-size: 24px;">{{ $viewcustomer->fname.' '. $viewcustomer->lname}}</h1>
							<p class="mar-bot-10">Mobile no <span style="margin-left: 10px; margin-right: 10px;">:</span> {{ $viewcustomer->mobile_no }}</p>
							<p class="mar-bot-10">Email ID <span style="margin-left: 20px; margin-right: 10px;">:</span>  {{ $viewcustomer->email }}</p>
							<p class="mar-bot-10">City <span style="margin-left: 46px; margin-right: 10px;">:</span>  {{ $viewcustomer->city }}</p>
							<p class="mar-bot-10">State <span style="margin-left: 36px; margin-right: 10px;">:</span>  {{ $viewcustomer->state }}</p>
						
						</div>
										
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
							
							
								
@endsection