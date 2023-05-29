  <div class="collapse navbar-collapse navbar-left-responsive-collapse">     
        <h4><a href='../20/bank.html'>Menu Bar</a></h4>
        <ul class='list-group sidebar-nav-v1'>
             @if(Auth::check())
               <li class='list-group-item'><a href='{{ URL::route("getlogin")}}'>Notifications</a></li>
             @else
               <li class='list-group-item'><a href='{{ URL::route("getlogin")}}'>ICE Association</a></li>
             @endif
               <li class='list-group-item'><a href='{{ URL::route("getmembers")}}'>Association Members</a></li>
                @foreach($users as $user)
              <li class='list-group-item'>
                  <a href="{{ URL::to('category', array($user->designation) )}}">{{ $user->designation}}->( {{ $user->total }} ) </a>
              </li>
                @endforeach
        </ul>

        <form class="navbar-form pull-right" role="search" action="{{ URL::route('postquery')}}" method="POST">
          <div class="input-group ">
                <select class="form-control" id="state" name="session" >
                  <option value="" >---Select Session---</option>
                    
                       @foreach($users as $user)
                          <option value="{{ $user->session }}">
                              {{ $user->session }}
                          </option>
                         @endforeach
                  </select>
                  <div class="input-group-btn">
                           <button class="btn btn-info " type="submit" name="search" id="p"><i class="fa fa-search "></i></button>
                  </div>
          </div>
        {{ Form::token() }}

       </form>


    </div>
                    <div class="clearfix"></div>
                    
                    <div class="hidden-xs">
                        
                    </div>