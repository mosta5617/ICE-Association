@extends('layout.main')

@section('content')

<h1 style="font-family:times">Your Search Result for "{{ $session }}" </h1>
<hr id="hr">

<div class="row">
	<div class="col-md-12 ">
			
@foreach($queries as $query)
			<div class="col-sm-6 col-md-2 pull-center">
			<a href="{{ URL::to('profile', array($query->id) )}}" >
						{{HTML::image($query->fullpath, '', array('title' => $query->fullname, 
				'class' => 'img-responsive img-thumbnail  ','style' => 'width:150px;height:100px' ))}}
			</a>
					<div class="caption">
						<a href="{{ URL::to('profile', array($query->id) )}}"> {{ $query->fullname }}</a>
						<p><span class="fa fa-bookmark-o "> {{ $query->session }} </span></p>
					</div> <br>
				</div>
	@endforeach
	
		
	</div>
	<div class="col-md-12">
		<center>	{{ $queries->links() }} </center>
		
	</div>
</div>



@stop
