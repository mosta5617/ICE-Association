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
<div class="row">
<div class=" col-md-11 col-md-offset-1">

<div class="reg-block">
    <div class="row">
<!--    @foreach($errors->all() as $error)
     {{ $error }}
     @endforeach -->
    <div class="col-md-2 ">

    </div>
<div class="col-md-8">
    <div class="reg-header">
        <center><h2 style="color:orange">Password Change!</h2></center>
        <center><p style="color:green"> {{ Session::get('error') }}</p></center>
        <center><p style="color:green" class="fa fa-laugh"> {{ Session::get('success') }}</p></center>
    </div>
<form action="{{ URL::route('changepassword')}}" class="form-horizontal" method="post" enctype="multipart/form-data" >
           <div class="form-group margin-bottom-20">
            <label class="col-md-4 control-label" for="Password">
               Old Password
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-8">
                <input class="form-control" name="oldpassword" placeholder="Old Password" type="text" value="" />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('oldpassword') }}
                   @endif
               </span>
            </div>
        </div> 
        <div class="form-group margin-bottom-20">
            <label class="col-md-4 control-label" for="Password">
               New Password
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-8">
                <input class="form-control" name="newpassword" placeholder="New Password" type="text" value="" />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('newpassword') }}
                   @endif
               </span>
            </div>
        </div>   
        <div class="form-group margin-bottom-20">
            <label class="col-md-4 control-label" for="RePassword">
                Re Type Password
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-8">
                <input class="form-control" name="re-newpassword" placeholder=" Re Type Password" type="text" value="" />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('re-newpassword') }}
                   @endif
               </span>
            </div>
        </div>
    


        <hr>
               <center> <button type="submit" class="btn-u ">Change Password!</button></center>
        {{ Form::token() }}
</form>
</div>
<div class="col-md-2"></div>


  </div><!-- /row -->
</div><!-- call back -->


    </div>
</div><!-- /row -->





@stop