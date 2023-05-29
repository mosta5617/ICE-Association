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
    <div class="reg-header">
        <h2>Enroll to ICE Association </h2>
        <p>Already Signed Up? Click <a href="{{ URL::route('getlogin')}}" class="color-green">Sign In</a> to login your account.</p>
    </div>
    <div class="row">
<form action="{{ URL::route('postregistration')}}" class="form-horizontal" method="post" enctype="multipart/form-data" >
<!--    @foreach($errors->all() as $error)
     {{ $error }}
     @endforeach -->
    <div class="col-md-8">

       <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label">
                Full Name 
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            
            <div class="col-md-9">
                <input class="form-control"  name="fullname" placeholder="User Name" type="text"   {{ (Input::old('fullname')) ? ' value="'.Input::old('fullname'). '"' :''}} />
               <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('fullname') }}
                   @endif
               </span>

            </div>
        </div>
        <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Email">
                Email
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <input class="form-control" name="email" placeholder="Email" type="text"  {{ (Input::old('email')) ? ' value="'.Input::old('email'). '"' :''}} />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('email') }}
                   @endif
               </span>
            </div>
        </div> 
         <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Password">
                Password
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <input class="form-control" name="password" placeholder="Password" type="text" value="" />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('password') }}
                   @endif
               </span>
            </div>
        </div>  
        <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="RePpassword">
                Re Type Password
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <input class="form-control" name="re-password" placeholder=" Re Type Password" type="text" value="" />  
                      <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('re-password') }}
                   @endif
               </span>
            </div>
        </div>
        <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Mobile">
                Mobile
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon" style="background:#eee">+88</span>
                    <input class="form-control" name="mobile" placeholder="Mobile" type="text"   {{ (Input::old('mobile')) ? ' value="'.Input::old('mobile'). '"' :''}} />
                   <span style="color:red">
                    @if($errors->has())
                        {{ $errors->first('mobile') }}
                   @endif
                   </span>
                </div>
            </div>
        </div>
         <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Designation">
                Designation
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-5">
                <div class="input-group">
                  <select class="form-control" id="country" name="designation">
                
                  </select>
                  <span style="color:red">
                    @if($errors->has())
                        {{ $errors->first('designation') }}
                   @endif
                   </span>
                </div>
            </div>
               <div class="col-md-4">
                <div class="input-group">
                 <select class="form-control" id="state" name="duty">

                  </select>
                </div>
            </div>
        </div>
           <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Qualification">
               Qualification
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <input class="form-control" name="qualification" placeholder="B.Sc. Engineering in ICE " type="text"   {{ (Input::old('qualification')) ? ' value="'.Input::old('qualification'). '"' :''}} />  
                  <span style="color:red">
                   @if($errors->has('qualification'))
                        {{ $errors->first('qualification') }}
                   @endif
                   </span>
            </div>
        </div>
         <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Facebook">
                Facebook
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-9">
                <input class="form-control" name="facebook" placeholder="Your Facebook link" type="text"   {{ (Input::old('facebook')) ? ' value="'.Input::old('facebook'). '"' :''}} />  
                  <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('facebook') }}
                   @endif
                   </span>
            </div>
        </div>
          <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Facebook">
                Linkedin
            </label>
            <div class="col-md-9">
                <input class="form-control" name="linkedin" placeholder="Your Linkedin link" type="text"   {{ (Input::old('linkedin')) ? ' value="'.Input::old('linkedin'). '"' :''}} />  
                  <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('linkedin') }}
                   @endif
                   </span>
            </div>
        </div>
         <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Website">
               Website Link
            </label>
            <div class="col-md-9">
                <input class="form-control" name="website" placeholder=" Your Website Link" type="text"  {{ (Input::old('website')) ? ' value="'.Input::old('website'). '"' :''}} />  
            </div>
        </div>
        <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Session">
                Session
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-5">
                <div class="input-group">
                  <select class="form-control" id="" name="session">
                  <span style="color:red">
                       @if($errors->has())
                            {{ $errors->first('session') }}
                       @endif
                   </span>
                  <option value="">---Select Session---</option>
                  <option value="Others">Others</option>
                  {{ $date=date("Y")+1 }}
                @for ($i =2000, $j=2001; $i <= $date,$j <= $date; $i++,$j++)
                  <option value="{{ $i }}-{{ $j }}">
                    Session:  {{ $i }} - {{ $j }}
                  </option>
                    @endfor
                  </select>
                
                </div>
            </div>
               <div class="col-md-4">
                <div class="input-group">
                 <select class="form-control" id="state" name="batch">
                  <span style="color:red">
                       @if($errors->has())
                            {{ $errors->first('batch') }}
                       @endif
                   </span>
                  <option value="">---Select Batch---</option>
                  <option value="0">Others</option>
                  {{ $date=20}}
                    
                       @for ($i =1; $i <= $date; $i++)
                    
                        <option value="{{ $i  }}">
                            Batch: {{ $i  }}
                        </option>
                           @endfor
                  </select>
                  
                </div>
            </div>
        </div>
        <div class="form-group margin-bottom-20">
            <label class="col-md-3 control-label" for="Security">
                Security Code
                <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
            </label>
            <div class="col-md-5">
                <div class="input-group">
             {{ HTML::image(Captcha::img(), '', array('alt'=>'title','class'=>'img-thumbnail'))}}  
       <!--      {{ HTML::image(Captcha::img(), 'alt')}} -->
     
                
                </div>
            </div>
               <div class="col-md-4">
                <div class="input-group">
                <input class="form-control" name="captcha" placeholder=" " type="text" value="" />  
                </div>
            </div>
        </div>
        <hr>

    </div>
    <div class="col-md-4">
 
    {{HTML::image('images/spritemap.png', '', array('title' => 'the title', 'class' => 'img-thumbnail prevImg'))}} 
        <div class="form-group s">
        <br>
            <input type="file" id="file" class="btn-u" name="file">
             <span style="color:red">
                   @if($errors->has())
                        {{ $errors->first('file') }}
                   @endif
            </span>
                
        </div>
    </div>

       
        <div class="row">
             <div class="col-lg-6">
                <label class="checkbox">
                   
                    <input name="checkbox" type="checkbox" value="false" />
                    I read All <i><a href=" " class="color-green">Terms and Conditions !</a></i><br>
                    <span style="color:red">
                       @if($errors->has())
                            {{ $errors->first('checkbox') }}
                       @endif
                   </span>
                </label>
             
            </div>
            <div class="col-lg-6  ">
                <button type="submit" class="btn-u">Register</button>
            </div>
        </div>
        {{ Form::token() }}
</form>

    </div><!-- /row -->
</div><!-- call back -->


    </div>
</div><!-- /row -->





@stop