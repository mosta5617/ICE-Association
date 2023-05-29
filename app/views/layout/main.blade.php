@include('layout.topheader')
        <div class="header ">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle btn-left-menu-chapter pull-left margin-left-5" data-toggle="collapse" data-target=".navbar-left-responsive-collapse">
                            <span class="sr-only"> Show navigation</span>
                            <span class="fa fa-bars "> Navigation</span>
                      </button>
                      <button type="button" class="navbar-toggle btn-top-menu" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only"> Show Menu</span>
                            <span class="fa fa-bars"> Show Menu</span>
                        </button>
                        
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    @include('layout.navigation')
                </div>
            </div><!-- End Navbar -->  
        </div><!--=== End Header ===-->

        <div class="container content">
            <div class="row">
         
                <div class="col-md-9" >
                    @include('layout.searchbar')
                    @yield('content')
          
                </div><!--col-md-9-->

        </div>  <!--row-->  
       

             <div class="col-md-3"><!--Right Sidebar content-->
                    
                    @include('layout.rightcontent')
                    
   
            </div> <!--col-md-3-->
                <!-- End Content -->
            </div><!--/row-->
        </div><!--/container-->

        <div class="copyright f">
                    @include('layout.footer')
            
        </div><!--/copyright-->
        <!--=== End Copyright ===-->
    </div><!--/End Wrapepr-->
    <!-- JS Global Compulsory -->
    
     {{ HTML::script('assets/js/jquery-1.10.2.js') }} 
     {{ HTML::script('assets/js/designation-duty.js') }} 
     {{ HTML::script('assets/js/members.js') }} 
     {{ HTML::script('assets/js/bootstrap.min.js') }}
     {{ HTML::script('assets/ckeditor/ckeditor.js') }}
     {{ HTML::script('assets/ckfinder/ckfinder.js') }}

     <!--  Designation and Duty  -->
      <script language="javascript">
                     populateCountries("country", "state");
                   </script>
     <!--  Search box -->
       <script type="text/javascript">
                       $("#q").click(function(){
                           $(this).animate({width:"400px"},500); 
                      });
                    </script>

                    <!--  file upload  -->
                      <script>
    $(document).ready(function(){
      $("#file").change(function(){
        var file = document.getElementById("file").files[0];
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function(e) {
          $('.prevImg').attr('src',e.target.result).fadeIn();
        }   
      })  
    })
  </script>
      <script type="text/javascript">
            CKEDITOR.replace("editor1");
      </script>
        <script type="text/javascript">
            CKEDITOR.replace("editor12");
      </script>

        <script type="text/javascript">
            CKEDITOR.replace("editor2");
      </script>  
      <script type="text/javascript">
            CKEDITOR.replace("editor23");
      </script>

       <script type="text/javascript">
            CKEDITOR.replace("editor3");
      </script>  
       <script type="text/javascript">
            CKEDITOR.replace("editor34");
      </script>
       <script type="text/javascript">
            CKEDITOR.replace("editor4");
      </script>  
      <script type="text/javascript">
            CKEDITOR.replace("editor41");
      </script>
      <script type="text/javascript">
        var editor = CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
        CKFinder.setupCKEditor( editor, '../' );
    </script>

  <script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to delete this record?');
    }
  </script>
    
</body>
</html>