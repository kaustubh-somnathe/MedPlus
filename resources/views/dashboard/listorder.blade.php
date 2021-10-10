@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Order List</h2>
</div>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="row clearfix">
                    <div class="body">
                        <div class="table-responsive col-md-12" style="margin-top: 5px;">
                            <table class="table table-bordered table-striped table-hover dtableleaving nowrap">
                                <thead>
                                    <tr>
                                        <th>SR.NO.</th>
                                        <th>ORDER</th>
                                        <th>NAME</th>
                                        <th>MOBILE</th>
                                        <th>CITY</th>
                                        <th>DATE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($customers as $k => $cust)
                                        @foreach ($order as $key => $value)
                                        @if($value->customer_id == $cust->id)
                                        <tr>
                                            <td>{{{ ++$key }}}</td>
                                            <td>{{ $value-> order_id }}</td>
                                            <td>{{ $cust -> fname.' '.$cust -> lname }}</td>
                                            <td>{{ $cust -> mobile_no }}</td>
                                            <td>{{ $cust -> city }}</td>
                                            <td>{{  \Carbon\Carbon::parse($value->date)->format('d-m-Y') }}</td>
                                           <td class="text-center">
                                                <a href='{{url("vieworder/".$value -> order_id)}}' title="View">
                                                    <button type="button" class="btn btn-warning btn-xs waves-effect">
                                                        <i class="material-icons">visibility</i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                            
                                        @endforeach
                                    @endforeach        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                                        
                                        
                    
                                            
