@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Users List</h2>
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
                                        <th >EMAIL ID</th>
                                        <th>ROLE ID</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($users as $key => $value)
                                        <tr>
                                            <td>{{{ ++$key }}}</td>
                                            <td>{{ $value -> name }}</td>
                                            <td>{{ $value -> email }}</td>
                                            <td>{{ $value -> role_id }}</td>
                                            
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
                    
                                            
