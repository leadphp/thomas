@include('partials/admin/header')
@include('partials/admin/sidebar')


 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Banner Edit</h3>
                  
                </div>
                @include('partials/admin/msg')
                  <div class="row">
                    <div class="col-md-12">
        <form name="banner-edit" method="POST" action="{{ route('banner-update') }}"  enctype="multipart/form-data" >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$home_banner_edit->id}}">
        <div class="edit_banner_img">
           <div class="row">
            <div class="col-md-6">
           <div class="form-group">
            
            <label>Image: </label>
            <img src="{{ asset('public/images/front/home/banner/'.$home_banner_edit->image) }}" class="tt">
            <input type="hidden" name="old_image" value="{{$home_banner_edit->image }}" >
            
          </div>
        </div>
         <div class="col-md-6">
          <div class="form-group">
            <label>Preview: </label>
            <img id="blah" src="#"  />
            <input type="file" name="image" class="image">
            
          </div>
        </div>
      </div>
    </div>

          <div class="form-group">
            <label>Alt Image: </label>
            <input type="text" name="image_alt" value="@if ($errors->has('image_alt')){{old('image_alt')}}@else{{$home_banner_edit->image_alt}}@endif">
        @if ($errors->has('image_alt')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image_alt') }}
            </label>
        @endif 
        </div>
       
        

          <div class="form-group">
            <label>Line 1: </label>
            <input type="text" name="line_1" value="@if ($errors->has('line_1')){{old('line_1')}}@else{{$home_banner_edit->line_1}}@endif">
        @if ($errors->has('line_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_1') }}
            </label>
        @endif   
        </div>

      <div class="form-group">
            <label>Line 2: </label>
            <input type="text" name="line_2" value="@if ($errors->has('line_2')){{old('line_2')}}@else{{$home_banner_edit->line_2}}@endif">
        @if ($errors->has('line_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_2') }}
            </label>
        @endif 
      </div>

      <div class="form-group">
            <label>Line 3: </label>
            <input type="text" name="line_3" value="@if ($errors->has('line_3')){{old('line_3')}}@else{{$home_banner_edit->line_3}}@endif">
        @if ($errors->has('line_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_3') }}
            </label>
        @endif 
        </div>

        <div class="form-group">
            <label>Button: </label>
            <input type="text" name="button" value="@if ($errors->has('button')){{old('button')}}@else{{$home_banner_edit->button}}@endif">
        @if ($errors->has('button')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('button') }}
            </label>
        @endif 
        </div>

        <div class="form-group">
            <label>Button Href: </label>
            <input type="text" name="button_href" value="@if ($errors->has('button_href')){{old('button_href')}}@else{{$home_banner_edit->button_href}}@endif">
        @if ($errors->has('button_href')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('button_href') }}
            </label>
        @endif 
        </div>  
         
       <div class="form-group">
            
        <input type="submit" name="Submit" class="btn btn-primary">
    </div>
      
      </form>
    </div>
        </div>
      </div>
</aside>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
       
        CKEDITOR.replace( 'content' );
    </script>

<script type="text/javascript">
  
$(document).ready(function(){
    $("#blah").hide();

});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$(".image").change(function() {
  readURL(this);
  $("#blah").show();
});
</script>    

@include('partials/admin/footer')  