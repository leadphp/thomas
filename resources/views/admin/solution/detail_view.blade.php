    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Detail View</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
                  <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
        <input type="button" class="solution_details cstm-accor" value="Detail Section">
    </div>
</div>
          <div class="cstm-solution">
       
        @foreach($detail as $details)
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{$details->title}}" disabled="">
      
        </div>

        <div class="form-group">
            <label>Banner Image: </label>
            <img src="{{ asset('public/images/admin/solution/banner/'.$details->banner_image) }}" class="tt">
        </div>

        <div class="form-group">
            <label>Alt Banner Image: </label>
            <input type="text" name="alt_banner_image" value="{{$details->alt_banner_image}}" disabled="">
        </div>

     
        <div class="form-group">
        <label>Sub Category: </label>
        <input type="text" name="solution" value="{{$details->sub_category}}" disabled="">
       
        </div>



      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description" disabled=""> {{$details->description}} </textarea>
      
        </div>

        <div class="form-group">
            <label>Image: </label>
            <img src="{{ asset('public/images/admin/solution/'.$details->image) }}" class="tt">
        </div>

         <div class="form-group">
        <label>Alt Image: </label>
        <input type="text" name="image_alt" value="{{$details->image_alt}}" disabled="">
        </div>
    
    
        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{$details->meta_title}}" disabled="">
     
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description" disabled=""> {{$details->meta_description}} </textarea>
   

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{$details->meta_keyword}}" disabled="">
      
   
    </div>
   
       
   @endforeach

     
   
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
                                   
                                </tr>
                            </thead>
                            <tbody class="tile_body">
                            
                                @foreach($tiles_specification as $tile)
                                <tr>
                                    <td><input type="text" name="size[]" value="{{$tile->size}}" disabled=""></td>
                                    <td><input type="text" name="sqft[]" value="{{$tile->sqft}}" disabled=""></td>
                                
                                    <td><input type="text" name="cost_per_title[]" value="{{$tile->cost_per_title}}" disabled=""></td>
                                    <td><input type="text" name="titles_per_box[]" value="{{$tile->titles_per_box}}" disabled=""></td>
                                    <td><input type="text" name="cost_per_box[]" value="{{$tile->cost_per_box}}" disabled=""></td>
                                    <td class="inline-flex">
                                    
                                
                                </tr>
                                @endforeach
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
                                   
                                    
                                </tr>
                            </thead>
                            <tbody class="colour_body">

                                @foreach($colours as $colour)
                                <tr>
                                    <td><input type="text" name="name[]" value="{{$colour->name}}" disabled=""></td>
                                    <td><input type="text" name="number[]" value="{{$colour->number}}" disabled=""></td>
                                    <td><input type="text" name="background_colour[]" value="{{$colour->background_colour}}" disabled=""></td>
                                    
                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


      </div>
    </aside>
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'meta_description' );
    
 </script> 

 <script>

    $(document).ready(function(){


        
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