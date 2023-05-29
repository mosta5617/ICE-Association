@extends('layout.main')

@section('content')

<h1 style="font-family:times">List of {{ $category1->designation }}</h1>
<hr id="hr">

<div class="row">
	<div class="col-md-12 ">
			
@foreach($category2 as $category)
			<div class="col-sm-6 col-md-2 pull-center">
			<a href="{{ URL::to('profile', array($category->id) )}}" >
						{{HTML::image($category->fullpath, '', array('title' => $category->fullname, 
				'class' => 'img-responsive img-thumbnail  ','style' => 'width:150px;height:100px' ))}}
			</a>	
				<div class="caption">
						<a href="{{ URL::to('profile', array($category->id) )}}"> {{ $category->fullname }}</a>
						<p><span class="fa fa-bookmark-o "> {{ $category->session }} </span></p>
					</div> <br>
				</div>
	@endforeach
	
		
	</div>
	<div class="col-md-12">
		<center>	{{ $category2->links() }} </center>
		
	</div>
</div>



@stop
