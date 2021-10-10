@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2 class="pull-left">Medicine List</h2>
    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-left: 30px; box-shadow: none;">Add Medicine
    </button>
</div>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="row clearfix">
                    <div class="body">
                        <div class="collapse" id="collapseExample">
                            <form method="post" action="{{route('medicine.submit')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label for="med_name">Medicine Name</label>
                                        <input type="text" id="med_name" name="med_name" class="form-control" placeholder="Medicine Name">
                                    </div>
                                
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <label for="mfg_name">Manufacturer Name</label>
                                        <input type="text" id="mfg_name" name="mfg_name" class="form-control" placeholder="Manufacturer Name" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="content">Content</label>
                                        <input type="text" id="content" name="content" class="form-control" placeholder="Content">
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <label for="mg_ml">Mg/Ml</label>
                                        <input type="text" id="mg_ml" name="mg_ml" class="form-control" placeholder="Mg/Ml" >
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <label for="MRP">MRP</label>
                                        <input type="text" id="MRP" name="MRP" class="form-control" placeholder="MRP">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md12  col-sm12  col-xs12 ">
                                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive col-md-12" style="margin-top: 5px;">
                            <table class="table table-bordered table-striped table-hover table-condensed nowrap dtable">
                                <thead>
                                    <tr>
                                        <th>SR.NO.</th>
                                        <th>MED NAME</th>
                                        <th>MG/ML</th>
                                        <th>NAME OF MANUFACTURER</th>
                                        <th>CONTENT</th>
                                        <th style="min-width: 60px;">MRP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($med_dictionary as $key => $value)
                                        <tr>
                                            <td>{{{ ++$key }}}</td>
                                            <td>{{ $value -> med_name }}</td>
                                            <td>{{ $value -> mg_ml }}</td>
                                            <td>{{ $value -> mfg_name }}</td>
                                            <td>{{ $value -> content }}</td>
                                            <td style="min-width: 60px;">{{ $value -> MRP }}</td>
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
                                        
        
                                    
                                    
                                    
                                
                                    
                                


              

                                        
                                        
                    
                                            
