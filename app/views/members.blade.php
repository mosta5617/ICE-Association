@extends('layout.main')

@section('content')
<hr id="hr">
<div class="row ">
<div class=" col-md-12 ">

        <h2>Select Member to Enroll ICE Association : </h2>
    

          
        <p style="color:red">{{Session::get('error') }}</p>
		<p style="color:green"> {{ Session::get('success') }}</p>

    <form class="form-horizontal" action="{{ URL::route('postmembers') }}" method="post">
        <div class="input-group margin-bottom-20  ">
            <div class="row">
               <div class="col-md-5">
                <div class="input-group">
                  <select class="form-control" id="" name="name_id">
                  <option value="">---Select Name---</option>
                    @foreach($users2 as $user)
                      <option value="{{ $user->id }}">
                        {{ $user->fullname }}
                      </option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                  <select class="form-control" id="" name="designation">
                    <option value="">null</option>
                    <option value="President">President</option>
                    <option value="Vice President">Vice President</option>
                  </select>
                
                </div>
            </div>
             <div class="col-md-2">
                <div class="input-group">
                  <select class="form-control" id="" name="position">
                    <option value="">Position</option>
                @for ($i =01; $i <= 15; $i++)
                  <option value="{{ $i }}">
                    {{ $i }}
                  </option>
                    @endfor
                  </select>
                
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn-u " type="submit"><span class="fa fa-plus"></span></button>
            </div>

            </div>
        </div>

        {{ Form::token() }}
    </form>

    <div class="table-responsive">
      <table class="table  table-bordered table-hover tbl">
        @foreach($users3 as $user)
        <tr>
            <td>{{ $counts++ }}</td>
            <td>
                <a href="{{ URL::to('profile', array($user->id) )}}" >
                        {{HTML::image($user->fullpath, '', array('title' => $user->fullname, 
                'class' => 'img-responsive img-circle  ','style' => 'width:70px;height:60px' ))}}
            </a>
            </td>
            <td>{{ ucwords($user->fullname) }} <br> <span class="fa fa-mobile fa-3g "> {{ $user->mobile }} </span>
                <br> <span class="fa fa-bookmark-o "> {{ $user->session }} </span>
            </td>
            <td>{{ $user->designation }} </td>
            <td>{{ $user->date }}</td>
            
            <td><a href="{{ URL::to('removemember', array($user->id) )}}"  class="btn btn-warning btn-xs" onclick="return confirmation()">Remove</a></td>
        </tr>
        @endforeach
        
      </table>
    </div>

</div><!-- /row -->
</div>



@stop