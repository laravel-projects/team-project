@extends('layouts.app')
@section('title',lang('lib.register.register'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{lang('lib.register.register')}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}  
                        <!-- first and last name -->
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">{{lang('lib.register.firstandlastname')}}</label>

                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <input id="firstname" type="text" placeholder="{{lang('lib.register.firstname')}}" class="form-control" name="firstname" value="{{ old('firstname') }}">

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-xs-6 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <input id="lastname" type="text" placeholder="{{lang('lib.register.lastname')}}" class="form-control" name="lastname" value="{{ old('lastname') }}">

                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- end first and last name -->

                        <!-- gender -->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-3 col-xs-3 control-label">{{lang('lib.register.gender')}}</label>

                            <div class="col-md-7 col-xs-8">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <label for="men" class="col-md-6 col-xs-8 control-label">{{lang('lib.register.male')}}</label>
                                        <input id="men" type="radio"  class="col-md-6 col-xs-4" name="gender"  value="1" checked {{ (old('gender') == 1)? 'checked':'' }}>
                                    </div> 
                                    <div class="col-md-6 col-xs-6">
                                        <label for="women" class="col-md-6 col-xs-8 control-label">{{lang('lib.register.female')}}</label>
                                        <input id="women" type="radio"  class="col-md-6 col-xs-4" name="gender" value="2" {{ (old('gender') == 2)? 'checked':'' }}>
                                    </div> 
                                </div>
                            </div>

                             @if ($errors->has('gender'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('gender') }}</strong>
                                 </span>
                             @endif
                        </div>   
                        <!-- end gender -->

                        <!-- birthday -->
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-3 col-xs-3 control-label">{{lang('lib.register.birthday')}}</label>

                            <div class="col-md-7 col-xs-9">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3"> 
                                        {!! MarvisionFormDay('day',old('day')) !!}
                                    </div>  
                                    <div class="col-md-5 col-xs-5"> 
                                        {!! MarvisionFormMonth('month',old('month')) !!}
                                    </div>  
                                    <div class="col-md-4 col-xs-4"> 
                                        {!! MarvisionFormYear('year',old('year')) !!}
                                    </div>  
                                </div>
                            </div>

                             @if ($errors->has('birthday'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('birthday') }}</strong>
                                 </span>
                             @endif
                        </div>   
                        <!-- end birthday -->

                        <!-- country -->
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-3 col-xs-3 control-label">{{lang('lib.register.country')}}</label>

                            <div class="col-md-7 col-xs-7">
                                {!! MarvisionFormCountry('country',old('country')) !!}
                            </div>

                             @if ($errors->has('country'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('country') }}</strong>
                                 </span>
                             @endif
                        </div>   
                        <!-- end country -->


                        <!-- email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">{{lang('lib.register.email')}}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" placeholder="{{lang('lib.register.email')}}" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- end email -->

                        <!-- password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">{{lang('lib.register.password')}}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" placeholder="*********" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- end password -->

                        <!-- end confirm password -->
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-3 control-label">{{lang('lib.register.confirmpassword')}}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" placeholder="*********" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- end confirm password -->

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> {{lang('lib.register.register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
