@extends('layout.main')

@section('content')
<div class="row">
<h1 style="font-family:times">{{ ucwords($profileuser->fullname) }}</h1>
	  		
<hr id="hr">
	<div class="col-md-4">
			
		{{HTML::image($profileuser->fullpath, '', array('title' => $profileuser->fullname, 
		'class' => 'img-responsive img-thumbnail pull-right','style' => 'width:250px;height:250px' ))}}		
		<center> <a href="{{ URL::to('message', array($profileuser->id) )}}" class="btn-u ">Message</a></center>
					


	</div>
	<div class="col-md-8">
	<div class="table-responsive">
		<table class="table table-striped tbl">
  				<tr >
  					<td>Full Name</td>
  					<td>{{ ucwords($profileuser->fullname) }}</td>  
  				 
  				</tr>
  				<tr>
  					<td>Designation</td>
  					<td>{{ $profileuser->designation }}</td>
  				</tr>
  				<tr>
  					<td>Qualification</td>
  					<td>{{ $profileuser->qualification }}</td>
  				</tr>  
  				<tr>
  					<td>Website</span></td>
  					<td>{{ $profileuser->website }}</td>
  				</tr>
  				<tr>
  					<td><span class="fa fa-facebook-square  fa-lg"> </span></td>
  					<td>{{ $profileuser->facebook }}</td>
  				</tr>
  				<tr>
  					<td><span class="fa fa-linkedin-square  fa-lg"></span></td>
  					<td>{{ $profileuser->linkedin }}</td>
  				</tr>
  				<tr>
				   <td> <span class="fa fa-envelope-o fa-lg"> </span></td>
				    <td>{{ $profileuser->email }}</td>
				</tr>
				<tr>
				   <td> <span class="fa fa-mobile fa-lg"></span></td>
				    <td>{{ $profileuser->mobile }}</td>
				</tr>	
				<tr>
				   <td> Session</td>
				    <td>{{ $profileuser->session }}</td>
				</tr>	
				<tr>
				   <td> Status</td>
				  
				   <td>{{ $profileuser->duty }}</td>
				  
				    
				</tr>
				
				
		</table>
	</div>
	</div>
</div> <br>

<div class="row">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sectionA">Educational Background</a></li>
    <li><a data-toggle="tab" href="#sectionB">Professional Experience</a></li>
    <li><a data-toggle="tab" href="#sectionC">Field of Interest</a></li>
    <li><a data-toggle="tab" href="#sectionD">Publications</a></li>
    <li><a data-toggle="tab" href="#sectionE">Downloads</a></li>
    
</ul>
<div class="tab-content">
	   <div id="sectionA" class="tab-pane fade in active">
		<!-- Large modal -->

			@foreach( $status as $s )
			
			  <br>
				{{ $s->educational_background }}
			@endforeach

   	 </div>	 <!-- #SectionA-->
   		  <div id="sectionB" class="tab-pane fade in ">
		 	
				@foreach( $status as $s )
				
			   <br>
					{{ $s->professional_experience }}
				@endforeach

   		 </div> <!-- #SectionB -->
   		<div id="sectionC" class="tab-pane fade in">
			@foreach( $status as $s )
			
			  <br>
				{{ $s->field_of_interest }}
			@endforeach

   		 </div> 		
   		  <div id="sectionD" class="tab-pane fade in">
				@foreach( $status as $s )
				
				  <br>
					{{ $s->publications }}
				@endforeach
	
   		 </div> 	
   		<div id="sectionE" class="tab-pane fade ">
		
		<br>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<table class="table table-bordered table-hover table-responsive tbl">
  				<tr class="active">
  					<td>#</td>
  					<td>Course Material</td>
  					<td>To Session</td>
  					<td>Uploaded</td>
  					<td>Download</td>
  				</tr>
  					@if(count($downloads) < 1)
  						{{dkfjd}}
  					@else
	  					@foreach( $downloads as $download )
		  				<tr>
		  					<td>{{ $counts++ }}</td>
		  					<td>{{ $download->file }}</td>
		  					<td>{{ $download->to }}</td>
		  					<td>{{ $download->date }}</td>
	 						<td><a href="{{ $download->file }}" class="btn btn-default fa fa-download btn-xs"><br>Download</a></td>
		  				</tr>			
						@endforeach
					@endif
			</table>
			</div>
		</div>



	
   		 </div>

</div>

</div>

@stop
