

    <div class="collapse navbar-collapse navbar-responsive-collapse ">
    <div class="row">
        <div class="col-md-3">
        <center>{{ HTML::image('/images/sitelogo4.png')}}</center>
        </div>
        <div class="col-md-9">
                     <ul class="nav navbar-nav top-menu">
                            <li><a href='{{ URL::route("home")}}'><span class="fa fa-home fa-3g"> Home</span></a></li>
                            <li class='dropdown'><a href=''>Bank</a>
                                <ul class='dropdown-menu'>
                                    <li><a href='{{ URL::route("next")}}'>Analytical Abilities</a></li>
                                    <li><a href='{{ URL::route("next")}}'>Analytical Abilities</a></li>
                                    <li><a href='{{ URL::route("next")}}'>Analytical Abilities</a></li>
                                   
                                
                                </ul>
                            </li>
                            <li><a href=" ">Blog</a></li>
                        
                                   
                        @if(Auth::check())

                             <li class='dropdown'>
                                <a href='' style="color:green"><span class="fa fa-user fa-3g"> Welcome </span></a>
              
                                <ul class='dropdown-menu'>
                                                 
                                    <li><a href="{{ URL::route('getviewprofile') }}"><span class="fa fa-user fa-3g"> &nbsp;View Profile </span></a></li>  
                                    <li><a href="{{ URL::route('logout') }}"><span class="fa fa-power-off fa-3g">  &nbsp;Logout  </span></a></li>
                                    <li><a href="{{ URL::route('changepassword') }}"><span class="fa fa-edit fa-3g">  &nbsp;Change password </span></a></li>   
                                
                                </ul>
                            </li>
                        


                       @else
                            <li><a href="{{ URL::route('getlogin') }}"><span class="fa fa-sign-in fa-3g">  login </span></a></li>
                       @endif

                       </ul>
        </div>
    </div>
               

 </div><!--/navbar-collapse-->