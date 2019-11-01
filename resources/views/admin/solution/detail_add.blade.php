    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Detail</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <form name="detail_add" method="post" action="{{ route('detail-save')}}" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-md-10">
                <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
            <input type="button" class="solution_details cstm-accor" value="Details Section" >
        </div>
    </div>
        <div class="cstm-solution">
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "type" value = "detail">
        
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{old('title')}}">
       @if ($errors->has('title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif 
        </div>

           <div class="form-group">
            <label>Banner Image: </label>
            <img id="blah1" src="#"  />
            <br>
            <input type="file" name="banner_image" id="banner" value="">
            @if ($errors->has('image')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('image') }}
                </label>
            @endif 
        </div>

         <div class="form-group">
            <label>Alt Banner Image: </label>
        
            <input type="text" name="alt_banner_image"  value="{{old('alt_banner_image')}}">
            @if ($errors->has('alt_banner_image')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('alt_banner_image') }}
                </label>
            @endif 
        </div>

        <div class="form-group">
        <label>Sub Category: </label>
     
        <select name="sub_category">
          <option value="">--Select--</option>
          @foreach($sub_category as $cat)
          <option value="{{$cat->id}}">{{$cat->title}}</option>
          @endforeach
        </select>
       @if ($errors->has('sub_category')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('sub_category') }}
            </label>
        @endif 
        </div>



      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description"> {{old('description')}} </textarea>
       @if ($errors->has('description')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('description') }}
            </label>
        @endif 
        </div>
        

                <div class="form-group">
            <label>Image: </label>
            <img id="blah" src="#"  />
            <br>
            <input type="file" name="image" id="imgInp" >
            @if ($errors->has('image')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('image') }}
                </label>
            @endif 
        </div>

        <div class="form-group">
            <label>Alt Image: </label>
            <input type="text" name="image_alt" value="{{old('image_alt')}}">
            @if ($errors->has('image_alt')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('image_alt') }}
                </label>
            @endif 
        </div>

    
        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{old('meta_title')}}" >
       @if ($errors->has('meta_title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_title') }}
            </label>
        @endif 
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description"> {{old('meta_description')}} </textarea>
        @if ($errors->has('meta_description')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_description') }}
            </label>
        @endif 

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{old('meta_keyword')}}">
        @if ($errors->has('meta_keyword')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_keyword') }}
            </label>
        @endif 
   
    </div>
   
       
   

       
       
    

    </div>
</div>
</div>  


    <div class="row paddtop">
        <div class="col-md-10">
                  <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
            <input type="button" class="tile-spec cstm-accor" value="Tile Specifications">
            </div>
        </div>
            <div class="cstm-tile">
                
                
                <div class="table-responsive table-bordered">          
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tile Size</th>
                                <th>Sqft/Tile</th>
                                <th>Cost Per Tile</th>
                                <th>#Tiles Per Box</th>
                                <th>Cost Per Box</th>
                                <th>Add/Remove</th>
                            </tr>
                        </thead>
                        <tbody class="tile_body">
                            <tr>
                                <td><p><input type="text" name="size[]" value=""></p></td>
                                <td><p><input type="text" name="sqft[]" value=""></p></td>
                            
                                <td><p><input type="text" name="cost_per_title[]" value=""></p></td>
                                <td><p><input type="text" name="titles_per_box[]" value=""></p></td>
                                <td><p><input type="text" name="cost_per_box[]" value=""></p></td>
                                <td class="inline-flex">
                                <input type="button" class="add btn btn-primary" value="Add" onclick="addrow();">
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row paddtop">
        <div class="col-md-10">
                 <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
            <input type="button" class="colours cstm-accor" value="Colours">
            </div>
        </div>
            <div class="cstm-colour">
                <div class="table-responsive table-bordered">          
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Background Colour</th>
                                <th>Add/Remove</th>
                                
                            </tr>
                        </thead>
                        <tbody class="colour_body">
                            <tr>
                                <td><p><input type="text" name="name[]" value=""></p></td>
                                <td><p><input type="text" name="number[]" value=""></p></td>
                                <td><p><input type="text" name="background_colour[]" value=""></p></td>
                                
                                <td class="inline-flex">
                                <input type="button" class="add btn btn-primary" value="Add" onclick="colouraddrow();">
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

             <div class="row paddtop">
    <div class="col-md-10">
        <div class="form-group">            
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        </div>
    </div>
    </div>
    

        </form>

      </div>
    </aside>
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'meta_description' );
    
 </script> 

<script type="text/javascript">
        $(document).ready(function(){


         $("#blah").hide();
         $("#blah1").hide();
         $(".cstm-solution").hide();
         $(".cstm-tile").hide();
         $(".cstm-colour").hide();

      $(".solution_details").click(function(){
        $(".cstm-solution").toggle();
      });   

      $(".tile-spec").click(function(){
        $(".cstm-tile").toggle();
      });

      $(".colours").click(function(){
        $(".cstm-colour").toggle();
      });
    });

    function addrow(){
        
        
        $(".tile_body").append('<tr><td><p><input type="text" name="size[]" value=""></p></td><td><p><input type="text" name="sqft[]" value=""></p></td><td><p><input type="text" name="cost_per_title[]" value=""></p></td><td><p><input type="text" name="titles_per_box[]" value=""></p></td><td><p><input type="text" name="cost_per_box[]" value=""></p></td><td><input type="button" class="add btn btn-primary" value="Add" onclick="addrow();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');

    }


    function colouraddrow()
    {
        $(".colour_body").append('<tr><td><p><input type="text" name="name[]" value=""></p></td><td><p><input type="text" name="number[]" value=""></p></td><td><p><input type="text" name="background_colour[]" value=""></p></td><td class="inline-flex"><input type="button" class="add btn btn-primary" value="Add" onclick="colouraddrow();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');    
    }

     function readURL(input) 
     {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }

       
    }

        function readURL1(input)
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }
    }

    $("#imgInp").change(function() {
        readURL(this);
        $("#blah").show();
    });

    $("#banner").change(function() {
        readURL1(this);
        $("#blah1").show();
    });
    
</script>

<script>
$(".solution_details").on("click", function(){
   $(this).closest('div').toggleClass("toggleactive");
});

$(".tile-spec").on("click", function(){
   $(this).closest('div').toggleClass("toggleactive");
});

$(".colours").on("click", function(){
   $(this).closest('div').toggleClass("toggleactive");
});
</script>

    @include('partials/admin/footer')  