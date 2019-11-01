@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
       <div class="box-header" style="cursor: move;">
              <h3 class="box-title">Social</h3>
              <div class="box-tools box-tools2">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('social-edit')}}">Edit</a> 
				</div>
              </div>
            </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="social_view"   enctype="multipart/form-data">

        
       
        @foreach($social_view as $social)
 
    
         <div class="form-group">
	        <label>Facebook: </label>
	     
	        <input type="text" name="facebook" value="{{$social->facebook}}" disabled="">
	      
        </div>


        <div class="form-group">
	        <label>Twitter: </label>
	     
	        <input type="text" name="twitter" value="{{$social->twitter}}" disabled="">
	 
        </div>

        <div class="form-group">
	        <label>Linkedin: </label>
	     
	        <input type="text" name="linkedin" value="{{$social->linkedin}}" disabled="">
	     
        </div>

        <div class="form-group">
	        <label>Youtube: </label>
	     
	        <input type="text" name="youtube" value="{{$social->youtube}}" disabled="">
	     
        </div>

          @endforeach 
        
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




@include('partials/admin/footer')  