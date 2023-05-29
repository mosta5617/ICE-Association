@extends('layout.main')

@section('content')
<div class="row">
<h1 style="font-family:times">{{ ucwords(Auth::user()->fullname) }}</h1>
	  		
<hr id="hr">
	<div class="col-md-4">
			
	{{HTML::image(Auth::user()->fullpath, '', array('title' => Auth::user()->fullname, 
	'class' => 'img-responsive img-thumbnail pull-right','style' => 'width:250px;height:250px' ))}}		
	<center><button class="btn-u " data-toggle="modal" data-target=".changepicture">Change Picture</button></center>
				
<!-- Start of Change profile picture -->
<div class="modal fade changepicture" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionxx">Change Your Profile Picture</h4>
			      </div>
			      <div class="modal-body">
					
				      <form action="{{ URL::route('postprofilepicture') }} " method="POST" enctype="multipart/form-data" >
						
			          <div class="form-group">
			          <div class="row">
				           	<div class="col-md-6 ">
				           	<h3>Recent Picture</h3>
    								{{HTML::image('images/spritemap.png', '', array('title' => 'the title', 'class' => 'img-thumbnail prevImg',
    								  'style' => 'width:250px;height:250px' ))}} 
					       	
				           	</div>
				           	<input type="hidden" name="id" value="{{ Auth::user()->id }}">
				           	<div class="col-md-6">
				           	<h3>Previous  Picture</h3>
				        	       {{HTML::image(Auth::user()->fullpath, '', array('title' => Auth::user()->fullname, 
							'class' => 'img-responsive img-thumbnail','style' => 'width:250px;height:250px' ))}}	
				           	</div>
				           	<div class="col-md-10 col-md-offset-1">
				           		<div class="form-group"> <br>
				           			<input type="file" name="file" id="file">
				           		</div>
				           	</div> 
			           </div>
			          </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
<!-- End of Change profile picture -->


	</div>
	<div class="col-md-8">
	<div class="table-responsive">
		<table class="table table-striped tbl">
  				<tr >
  					<td>Full Name</td>
  					<td>{{ Auth::user()->fullname }}</td>  
  				 
  				</tr>
  				<tr>
  					<td>Designation</td>
  					<td>{{ Auth::user()->designation }}</td>
  				</tr>
  				<tr>
  					<td>Qualification</td>
  					<td>{{ Auth::user()->qualification }}</td>
  				</tr>  
  				<tr>
  					<td>Website</span></td>
  					<td>{{ Auth::user()->website }}</td>
  				</tr>
  				<tr>
  					<td><span class="fa fa-facebook-square  fa-lg"> </span></td>
  					<td>{{ Auth::user()->facebook }}</td>
  				</tr>
  				<tr>
  					<td><span class="fa fa-linkedin-square  fa-lg"></span></td>
  					<td>{{ Auth::user()->linkedin }}</td>
  				</tr>
  				<tr>
				   <td> <span class="fa fa-envelope-o fa-lg"> </span></td>
				    <td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
				   <td> <span class="fa fa-mobile fa-lg"></span></td>
				    <td>{{ Auth::user()->mobile }}</td>
				</tr>	
				<tr>
				   <td> Session</td>
				    <td>{{ Auth::user()->session }}</td>
				</tr>	
				<tr>
				   <td> Status</td>
				   @if( Auth::user()->duty=='' )
				    	<td> Student </td>
				    @else
				    	<td>{{ Auth::user()->duty }}</td>
				    @endif
				    
				</tr>
				 <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target=".editprofile"><span class="fa fa-edit"></span></button>
				
		</table>
	</div>
	</div>
</div> <br>
<!-- Start of Edit profile picture -->
<div class="modal fade editprofile" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionxx">Change Your Profile Information</h4>
			      </div>
			      <div class="modal-body">
					
				      <form action="{{ URL::route('posteditprofile') }} " method="POST" >
						
			          <div class="form-group">
			          <div class="row">
			           	<div class="col-md-6">
				           	 <input class="form-control" placeholder=" Your Fullname" name="fullname"  type="text"   value="{{ Auth::user()->fullname }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Designation" name="designation"  type="text"   value="{{ Auth::user()->designation }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Qualification"  name="qualification"  type="text"   value="{{ Auth::user()->qualification }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Website Link" name="website"  type="text"   value="{{ Auth::user()->website }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Facebook Link" name="facebook"  type="text"   value="{{ Auth::user()->facebook }}" />  
			           	</div>
			           	<input type="hidden" name="id" value="{{ Auth::user()->id }}">
			           	<div class="col-md-6">
			        		 <input class="form-control" placeholder=" Your Linkedin Link" name="linkedin"  type="text"   value="{{ Auth::user()->linkedin }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Email" name="email"  type="text"   value="{{ Auth::user()->email }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Mobile" name="mobile"  type="text"   value="{{ Auth::user()->mobile }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Session" name="session"  type="text"   value="{{ Auth::user()->session }}" />  <br>
				           	 <input class="form-control" placeholder=" Your Duty" name="duty"  type="text"   value="{{ Auth::user()->duty }}" />  
			           	</div>
			           </div>
			          </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
<!-- End of Edit profile picture -->


			<center>
                   <span style="color:red" >  {{ Session::get('error') }}</span>	
                   <span style="color:green"> {{ Session::get('success') }}</span>	
            </center> 
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
	 	@if(count($status)>0)
			@foreach( $status as $s )
			 <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target=".ab"><span class="fa fa-edit"></span></button>
			  <br>
				{{ $s->educational_background }}
			@endforeach
	 		@else
			 <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".a"><span class="fa fa-plus"></span></button>
	 	@endif

	 	<!-- Start of  Addition 'Section A' and Edit -->
			<div class="modal fade a" role="dialog" aria-labelledby="sectionA">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionA">Your Educational Background</h4>
			      </div>
			      <div class="modal-body">
				      <form action="{{ URL::route('posteducationalbackground')}}" method="POST">
					    	 <textarea class = "form-control" rows = "3"  id="editor1" name="educational_background"></textarea>	
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
        				 {{ Form::token() }}
				      </form>
				  </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<div class="modal fade ab" role="dialog" aria-labelledby="sectionA">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionA">Your Educational Background</h4>
			      </div>
			      <div class="modal-body">
				      <form action="{{ URL::route('postediteducation')}} " method="POST">
					    	 <textarea class = "form-control" rows = "3"  id="editor12" name="educational_background">
					    	 		@foreach( $status as $s )
										{{ $s->educational_background }}
									@endforeach
					    	 </textarea>	
					    	 	@foreach( $status as $s )
				     				 <input type="hidden" value="{{ $s->id }}" name="id">			
								@endforeach
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
        				 {{ Form::token() }}
				      </form>
				  </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


		<!-- End of  Addition 'Section A' and Edit -->

	
   	 </div>	 <!-- #SectionA-->
   		  <div id="sectionB" class="tab-pane fade in ">
		 	@if(count($status)>0)
				@foreach( $status as $s )
				 <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target=".bc"><span class="fa fa-edit"></span></button>
			   <br>
					{{ $s->professional_experience }}
				@endforeach
		 		@else
				 <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".b"><span class="fa fa-plus"></span></button>
	 		@endif

		<!-- Start for Addition 'Section B' and Edit -->

	    	<div class="modal fade b" role="dialog" aria-labelledby="sectionB">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionB">Your Professional Experience</h4>
			      </div>
			      <div class="modal-body">

				       <form action="{{ URL::route('postprofessionalexperience') }}" method="POST">
						     <textarea class = "form-control" rows = "3"  id="editor2" name="professional_experience"></textarea>	
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Save changes</button>
						      </div>
						      	 {{ Form::token() }}
					    </form>
					</div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
			 <div class="modal fade bc" role="dialog" aria-labelledby="sectionB">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionB">Your Professional Experience</h4>
			      </div>
			      <div class="modal-body">

				       <form action="{{ URL::route('posteditexperience') }} " method="POST">
						     <textarea class = "form-control" rows = "3"  id="editor23" name="professional_experience">
						     		@foreach( $status as $s )
										{{ $s->professional_experience }}
									@endforeach
						     </textarea>	
						     	@foreach( $status as $s )
				     				 <input type="hidden" value="{{ $s->id }}" name="id">			
								@endforeach
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Save changes</button>
						      </div>
						      	 {{ Form::token() }}
					    </form>
					</div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		<!-- End of  Addition 'Section A' and Edit -->
		

   		 </div> <!-- #SectionB -->
   		<div id="sectionC" class="tab-pane fade in">
	 	@if(count($status)>0)
			@foreach( $status as $s )
			 <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target=".cd"><span class="fa fa-edit"></span></button>
			  <br>
				{{ $s->field_of_interest }}
			@endforeach
	 		@else
			 <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".c"><span class="fa fa-plus"></span></button>
	 	@endif
		<!-- Start for Addition 'Section C' and Edit -->

	    	<div class="modal fade c" role="dialog" aria-labelledby="sectionC">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionC">Field of Interests</h4>
			      </div>
			      <div class="modal-body">
				      <form action="{{ URL::route('postfieldofinterest') }}" method="POST">
					    	 <textarea class = "form-control" rows = "3"  id="editor3" name="field_of_interest"></textarea>	
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			          	 {{ Form::token() }}
					   </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			

			 <div class="modal fade cd" role="dialog" aria-labelledby="sectionC">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionC">Field of Interests</h4>
			      </div>
			      <div class="modal-body">
				      <form action="{{ URL::route('posteditfields') }}" method="POST">
					    	 <textarea class = "form-control" rows = "3"  id="editor34" name="field_of_interest">
					    	 	@foreach( $status as $s )
									{{ $s->field_of_interest }}
								@endforeach
					    	 </textarea>
					    	 	@foreach( $status as $s )
				     				 <input type="hidden" value="{{ $s->id }}" name="id">			
								@endforeach	
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			          	 {{ Form::token() }}
					   </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->



		<!-- End of  Addition 'Section A' and Edit -->
			
   		 </div> 		
   		  <div id="sectionD" class="tab-pane fade in">
		 	@if(count($status)>0)
				@foreach( $status as $s )
				 <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target=".da"><span class="fa fa-edit"></span></button>
				  <br>
					{{ $s->publications }}
				@endforeach
		 		@else
				 <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".d"><span class="fa fa-plus"></span></button>
	 		@endif
		<!-- Start for Addition 'Section C' and Edit -->

	    	<div class="modal fade d" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionD">Your Publications</h4>
			      </div>
			      <div class="modal-body">

				      <form action="{{ URL::route('postpublications') }}" method="POST">
				    	 <textarea class = "form-control" rows = "3"  id="editor4" name="publications"></textarea>	
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


			<div class="modal fade da" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionD">Your Publications</h4>
			      </div>
			      <div class="modal-body">

				      <form action="{{ URL::route('posteditpublications') }}" method="POST">
				    	 <textarea class = "form-control" rows = "3"  id="editor41" name="publications">
				    	 	@foreach( $status as $s )
								{{ $s->publications }}
							@endforeach
				    	 </textarea>
				    	 	@foreach( $status as $s )
				     				 <input type="hidden" value="{{ $s->id }}" name="id">			
							@endforeach	
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->



		<!-- End of  Addition 'Section A' and Edit -->
			
	
   		 </div> 	
   		  <div id="sectionE" class="tab-pane fade ">
		<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".e"><span class="fa fa-plus"></span></button>
		<br>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<table class="table table-bordered table-hover table-responsive tbl">
  				<tr class="active">
  					<td>#</td>
  					<td>Course Material</td>
  					<td>Status</td>
  					<td>Uploaded</td>
  					<td>Edit</td>
  					<td>Delete</td>
  				</tr>
  					@foreach( $downloads as $download )
	  				<tr>
	  					<td>{{ $counts++ }}</td>
	  					<td>{{ $download->file }}</td>
	  					<td><a href="{{ URL::to('downloadpublish', array($download->id) )}}" class="btn btn-primary btn-xs">{{ $download->active }}</a></td>
	  					<td>{{ $download->date }}</td>

						<td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".editdownloads"><span class="fa fa-edit" ><a href="{{ URL::to('editdownloads', array($download->id) )}}"></a></span></button></td>
						<td><a href="{{ URL::to('deletedownloads', array($download->id) )}}" class="btn btn-warning btn-xs" onclick="return confirmation()">Delete</a></td>

	  				</tr>
	
								
					@endforeach
			</table>
			</div>
		</div>


<!-- Start of Edit downloads  -->
			<div class="modal fade editdownloads" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionE">Change Your Uploaded File</h4>
			      </div>
			      <div class="modal-body">
					
				      <form action=" " method="POST" enctype="multipart/form-data">
						
			          <div class="form-group">
			          <center><p style="color:red"> <span class="fa fa-warning"></span> Upload pdf, ppt, doc type file. </p></center>
			            <label for="recipient-name" class="control-label">Title</label>
               			 <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
			            <input type="text" class="form-control" id="recipient-name" name="downloadtitle">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Course Material</label>
               			 <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
			           <input type="file" id="file" class="" name="downloadfile">
			          </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

 <!-- End of Edit downloads  -->

			<div class="modal fade e" role="dialog" aria-labelledby="sectionD">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="sectionE">Upload Your File</h4>
			      </div>
			      <div class="modal-body">
					
				      <form action="{{ URL::route('postdownloads') }} " method="POST" enctype="multipart/form-data">
						
			          <div class="form-group">
			          <center><p style="color:red"> <span class="fa fa-warning"></span> Upload pdf, ppt, doc type file. </p></center>
			         	<div class="row">
			         		<div class="col-md-8">
			         			   <label for="recipient-name" class="control-label">Title</label>
			               			 <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
						            <input type="text" class="form-control" id="recipient-name" name="downloadtitle">
			         		</div>
			         		<div class="col-md-4">
			         			 <label for="recipient-name" class="control-label">To</label>
			               			 <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
						               <div class="input-group">
							                  <select class="form-control"  name="to">
							                  <option value=" ">--Select--</option>
							                  @foreach($users as $user )
							                	 <option value="{{ $user->session}}">
							                          {{ $user->session}}
							                      </option>
							                   @endforeach
									          </select>
						                </div>
			         		</div>
			         	</div>

			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Course Material</label>
               			 <i data-toggle="tooltip" data-placement="top" style="color:red">*</i>
			           <input type="file" id="file" class="" name="downloadfile">
			          </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
			      	  {{ Form::token() }}
					  </form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
	
   		 </div>

</div>

</div>

@stop
