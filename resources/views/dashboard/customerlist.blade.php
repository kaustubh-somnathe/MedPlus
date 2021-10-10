@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Customers List</h2>
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
                                        <th>NAME</th>
                                        <th>MOBILE NO.</th>
                                        <th>EMAIL ID</th>
                                        <th>CITY</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($customers as $key => $value)
                                        <tr>
                                            <td>{{{ ++$key }}}</td>
                                            <td>{{ $value -> fname.' '.$value -> lname }}</td>
                                            <td>{{ $value -> mobile_no }}</td>
                                            <td>{{ $value -> email }}</td>
                                            <td>{{ $value -> city }}</td>
                                            <td>{{ $value -> status }}</td>
                                           <td class="text-center">
                                                <a href='{{ url("viewcustomer/".$value->id) }}' title="View">
                                                    <button type="button" class="btn btn-warning btn-xs waves-effect">
                                                        <i class="material-icons">visibility</i>
                                                    </button>
                                                </a>
                                            </td>
                                            
                                        </tr>
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

                                        
                                        
                    
                                            
