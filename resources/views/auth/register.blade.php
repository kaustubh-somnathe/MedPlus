@extends('layouts.cdash')

@section('content')
<div class="card block-header form-head">
    <h2>Register User</h2>
</div>
<div class="container-fluid">
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        @if (session('success'))
                            <div class="alert alert-success" onclick="$(this).hide()">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Success !!!</strong> {{ session('success') }}
                            </div>
                        @elseif (session('fail'))
                            <div class="alert alert-danger" onclick="$(this).hide()">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Success !!!</strong> {{ session('fail') }}
                            </div>
                        @endif
                        <div class="row clearfix">
                            <div class="col-sm-12 m-b-0">
                                <div class="row clearfix">
                                    <div class="col-sm-6 m-b-0">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required  />
                                                <label class="form-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                                <small>{{ $errors->first('name') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 m-b-0">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required  />
                                                <label class="form-label">Email Id</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                <small>{{ $errors->first('email') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-3 m-b-0">
                                        <div class="form-group form-float">
                                            <select name="role_id" id="roleId" class="form-control text-uppercase">
                                                <option value="">Select Type</option>
                                                <option value="1" {{ old('role_id') == '1' ? 'selected' : '' }}>Super_admin</option>
                                                <option value="2" {{ old('role_id') == '2' ? 'selected' : '' }}>Marketing Manager</option>
                                                <option value="3" {{ old('role_id') == '3' ? 'selected' : '' }}>Team Manager</option>
                                                <option value="4" {{ old('role_id') == '4' ? 'selected' : '' }}>Sells Manager</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('role_id'))
                                            <span class="text-danger">
                                                <small>{{ $errors->first('role_id') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-9 m-b-0">
                                        <div class="col-sm-6 m-b-0">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" required  />
                                                    <label class="form-label">{{ __('Password') }}</label>
                                                </div>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">
                                                    <small>{{ $errors->first('password') }}</small>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 m-b-0">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" required  />
                                                    <label class="form-label">{{ __('Confirm Password') }}</label>
                                                </div>
                                            </div>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="text-danger">
                                                    <small>{{ $errors->first('password_confirmation') }}</small>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="btn-action-bar">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary" >Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection