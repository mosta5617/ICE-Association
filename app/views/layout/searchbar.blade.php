     <div class="row">
                    <div class="col-md-6">

                    {{ Breadcrumbs::render('home') }}

<!--  Breadcrumbs start -->
   
       <p style="font-size:15px;padding-top:10px;"> <i>You are Here:</i> <i class="fa fa-home"></i>
        <a href="{{route('home')}}">Home</a>
        <i class="fa fa-angle-right fa-3g"></i>
    
      @for($i = 0; $i <= count(Request::segments()); $i++)
    
        <a href="">{{ ucfirst(Request::segment($i)) }}</a>
        @if($i < count(Request::segments()) & $i > 0)
          <i class="fa fa-angle-right fa-lg"></i>
        @endif
    
      @endfor
      </p>
  
<!--  Breadcrumbs End -->
       
                    </div>
                    <div class="col-md-6">
                    <form class="navbar-form pull-right" role="search" action="{{ URL::route('postsearch') }}" method="POST">
                      <div class="input-group ">
                        <input type="text" class="form-control " placeholder="Search" name="search" id="q">
                         <div class="input-group-btn ">
                             <button class="btn btn-info " type="submit" id="p"><i class="fa fa-search "></i></button>
                         </div>
                          {{ Form::token() }}
                         
                      </div>
                  </form>
                  
                    </div>
                </div><!-- End row of searchbox -->  
                <div class="row " >
                  <div class="col-md-2 latest-news">.</div>
                  <div class="col-md-10"><marquee behavior="scroll" direction="left" style="color:orange">Your scrolling text goes here Your scrolling text goes hereYour scrolling text goes here</marquee> </div>
                </div>

                      <br>

                   <div class="row margin-left-5">
                    <div class="row col-xs-12 alert-container "></div>