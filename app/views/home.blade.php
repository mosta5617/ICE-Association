@extends('layout.main')

@section('content')
<hr id="hr">

<div class="row">
	<div class="col-md-12 ">
			
@foreach($us as $u)
			<div class="col-sm-6 col-md-2 ">
			<a href="{{ URL::to('profile', array($u->id) )}}" >
						{{HTML::image($u->fullpath, '', array('title' => $u->fullname, 
				'class' => 'img-responsive img-thumbnail  ','style' => 'width:150px;height:100px' ))}}
			</a>
					<div class="caption">
						<a href="{{ URL::to('profile', array($u->id) )}}"> {{ $u->fullname }}</a>
						<p><span class="fa fa-bookmark-o "> {{ $u->session }} </span></p>
					</div> <br>
				</div>
	@endforeach
	
		
	</div>
	<div class="col-md-12">

		<center>	{{ $us->links() }} </center>
		
	</div>
</div>

			
	 <br>
@stop