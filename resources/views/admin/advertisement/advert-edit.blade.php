@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Advertisement Edit</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="advert-edit" method="post" action="{{ route('advert-update')}}" enctype="multipart/form-data"   >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$advert->id}}">
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="@if ($errors->has('title')){{old('title')}}@else{{$advert->title}}@endif">
       @if ($errors->has('title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif 
        </div>

     <div class="form-group">
        <label>Description: </label>
        <textarea rows="4" cols="50" name="description">@if ($errors->has('description')){{old('description')}}@else{{$advert->description}}@endif </textarea>
        @if ($errors->has('description'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('description') }}
            </label>
        @endif

    </div>


          <div class="row"> 
        <div class="col-md-12">
            <label>Image: </label>
        </div>
       <div class="col-md-6">  
      <div class="form-group">
        
        <img src="{{ asset('public/images/advertisement/'.$advert->image) }}">
        <input type="hidden" name="old_image" value="{{$advert->image}}">
         </div>
    </div>
    <div class="col-md-6"> 
        <img id="blah" src="#"  />
        <br>
        <input type="file" name="image" id="imgInp" >
        @if ($errors->has('image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image') }}
            </label>
        @endif
   </div>
</div>

    <div class="form-group">
        <label>Link: </label>
       
        <input type="text" name="link"  value="@if ($errors->has('link')){{old('link')}}@else{{$advert->link}}@endif">
        @if ($errors->has('link'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('link') }}
            </label>
        @endif
    </div>

       <div class="form-group">
            <label>Status: </label>
            <label class="switch">
            <input type="checkbox" name="status" @if($advert->status =='on')
             {
               checked
             }
             @else{
               
             }
             @endif>
            <span class="slider round"></span>
            </label>    
    </div>


     
   
  
        

           
        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary" value="Update">
    </div>
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $("#blah").show();
});






</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#blah").hide();

});
</script>

 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    
 </script> 


@include('partials/admin/footer')  