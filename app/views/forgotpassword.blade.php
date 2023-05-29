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
        <h2>Enter your email to recover password </h2>
    </div>

          
        @foreach($errors->all() as $error)
          <p style="color:red">{{ $error }}</p>        
        @endforeach
        <p style="color:red"> {{ Session::get('global') }}</p>
		<p style="color:green"> {{ Session::get('success') }}</p>


    <form class="form-horizontal" action="{{ URL::route('getforgotpassword')}}" method="post">
        <div class="input-group margin-bottom-20  ">
            <span class="input-group-addon" style="background:#eee"><i class="fa fa-envelope-o"> Email </i></span>
            <input class="form-control " name="email" placeholder="Enter Your Email " type="text" value="" {{ (Input::old('email')) ? ' value="'.Input::old('email'). '"' :''}} />
         
        </div>
    
       
      
         <div class="row">
        
            <div class="col-md-6">
                <a href="{{ URL::route('home')}} " class=" btn-u btn-u-yellow pull-right arrow-left  "> <span class="fa fa-arrow-left"></span> Back </a>   
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn-u  pull-left"> Submit</button>
              
            </div>
        </div>
       
        {{ Form::token() }}
    </form><br>

    <div class="row col-md-12">
       <span class="fa fa-warning"></span> Dont have an account? <a href=" {{ URL::route('getregistration')}}">Register</a> now. It's easy and should take less than a minute
    </div>
    </div>
</div>
</div><!-- /row -->





@stop