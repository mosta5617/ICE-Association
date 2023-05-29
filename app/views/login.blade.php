@extends('layout.main')

@section('content')
<hr id="hr">

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
    <div class="row ">
<div class=" col-md-6 col-md-offset-2 ">
<div class="reg-block">
    <div class="reg-header">
        <h2>Login to ICE Association</h2>
    </div>

          
        <p style="color:red"> {{ Session::get('global') }}</p>
		<p style="color:green"> {{ Session::get('success') }}</p>

        @foreach($errors->all() as $error)
          <p style="color:red">{{ $error }}</p>        
        @endforeach

    <form class="form-horizontal" action="{{ URL::route('postlogin')}}" method="post">
        <div class="input-group margin-bottom-20  ">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input class="form-control " name="email" placeholder="Enter Your Email " type="text"  {{ (Input::old('email')) ? ' value="'.Input::old('email'). '"' :''}} />
         
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input class="form-control"  name="password" placeholder="Password" type="password" />
         
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="checkbox"><input type="checkbox" name="remember"> Stay signed in</label>
            </div>
            <div class="col-md-4">
                <button class="btn-u pull-right" type="submit">Login</button>
            </div>
            <div class="col-md-4">
                <a href="{{ URL::route('getforgotpassword')}} " class="btn-u btn-u-yellow pull-right"> Forgot Password?</a>
            </div>
        </div>
        {{ Form::token() }}
    </form>

    <div class="row col-md-12">
        Dont have an account? <a href=" {{ URL::route('getregistration')}}">Register</a> now. It's easy and should take less than a minute
    </div>
    </div>
</div>
</div><!-- /row -->





@stop