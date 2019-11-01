    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Detail</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
                        <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
        <input type="button" class="solution_details cstm-accor" value="Detail Section">
        <i class="fa fa-plus solution_details"></i>
    </div>
</div>
        <form name="s_category_view" >
        <div class="cstm-solution">
       
        @foreach($sub_product as $cat)
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{$cat->title}}" disabled="">
      
        </div>
        <div class="form-group">
                            <label>Banner Image: </label>
                             <img src="{{ asset('public/images/product/banner/'.$cat->banner_image) }}" class="tt">
                        </div>
                        <div class="form-group">
                            <label>Alt Banner Image: </label>
                            <input type="text" name="alt_banner_image" value="{{$cat->alt_banner_image}}" disabled="">
                        </div>

        <div class="form-group">
            <label>Price: </label>
            <input type="text" name="price" value="{{$cat->price}}" disabled="">
         
        </div>  


     <?php  
        DB::enableQueryLog();
        $ids = explode(',',$cat->sub_category_id);
        $value = \App\csc_sub_category::whereIn('id',$ids)->get();
        $category = "";
        foreach ($value as $i => $k) {  
          $category .= $k->title;
          $category .= ($i + 1) < count($value) ? ', ' : '';
    }

   

?>
        <div class="form-group">
        <label>Category: </label>
        <input type="text" name="solution" value="{{$category}}" disabled="">
       
        </div>


       
      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description" disabled=""> {{$cat->description}} </textarea>
      
        </div>

          <div class="form-group">
            <label>Image: </label>
            <img src="{{ asset('public/images/product/'.$cat->image) }}" class="tt">
        </div>
          <div class="form-group">
        <label>Alt Image: </label>
        <input type="text" name="image_alt" value="{{$cat->image_alt}}" disabled="">
        </div>

         <div class="form-group">
            <label> Product Features: </label>              
            <textarea rows="4" cols="50" name="product_features" disabled=""> {{$cat->product_features}}</textarea>
            
        </div>

        <div class="form-group">
            <label> Available Cast-In-Place Tile Sizes And Prices: </label>             
            <textarea rows="4" cols="50" name="size_price" disabled=""> {{$cat->size_price}}</textarea>
            
        </div>

        <div class="form-group">
            <label> Application: </label>               
            <textarea rows="4" cols="50" name="application" disabled="">{{$cat->application}}</textarea>
            
        </div> 
    
    
        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{$cat->meta_title}}" disabled="">
     
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description" disabled=""> {{$cat->meta_description}} </textarea>
   

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{$cat->meta_keyword}}" disabled="">
      
   
    </div>
   
       
   @endforeach
</div>
     
   
       
    
        </form>
    </div>
</div>
@if(!empty($tiles_specification[0]->size))
     <div class="row paddtop">
            <div class="col-md-10">
                <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
                <input type="button" class="tile-spec cstm-accor" value="Tile Specifications">
                <i class="fa fa-plus tile-spec"></i>
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
                                    <th>Description</th>
                                    <th>Tile Code</th>
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
                                    <td><p><input type="text" name="spec_description[]" value="{{$tile->description}}" disabled=""></p></td>
                                    <td><p><input type="text" name="tile_code[]" value="{{$tile->tile_code}}" disabled=""></p></td>
                                    <td class="inline-flex">
                                    
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endif        
@if(!empty($tiles_specification[0]->price))
             <div class="row paddtop">
        <div class="col-md-10">
        <div class="toogle-wrap">
          <div class="togglebtn toggle-click">
        <input type="button" class="tile-spec-image cstm-accor" value="Tile Specifications With Image">
        <i class="fa fa-plus tile-spec"></i>
        </div>
        </div>
        <div class="cstm-tile-image">
          <div class="table-responsive table-bordered">          
            <table class="table">
              <thead>
                <tr>
                  <th>Img</th>
                  <th>Description</th>
                  <th>Price per dome or bar</th>
                  <th>Domes or Bars per Box</th>
                  <th>Price</th>
                  
                </tr>
              </thead>
              <tbody class="tile_body_img">
                <?php  $z=1 ?>

                @foreach($tiles_specification as $tile)
                <tr>
                  <td><p>@if(!empty($tile->img))<img src="{{ asset('public/images/tiles/'.$tile->img) }}" >@endif</p></td>
                
                  <td><p><input type="text" name="spec_description[]" value="{{$tile->description}}" disabled=""></p></td>
                  <td><p><input type="text" name="price_per_domes[]" value="{{$tile->price_per_domes}}" disabled=""></p></td>
                  <td><p><input type="text" name="domes_per_box[]" value="{{$tile->domes_per_box}}" disabled=""></p></td>
                  <td><p><input type="text" name="spec_price[]" value="{{$tile->price}}" disabled=""></p></td>
                  <td class="inline-flex">
                 
                  <?php  $z++ ?>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endif
        <div class="row paddtop">
            <div class="col-md-10">
                <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
                <input type="button" class="colours cstm-accor" value="Colours">
                <i class="fa fa-plus colours"></i>
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
    CKEDITOR.replace( 'product_features' );
    CKEDITOR.replace( 'size_price' );
    CKEDITOR.replace( 'application' );

    


    
 </script> 
 <script>

    $(document).ready(function(){


        
         $(".cstm-solution").hide();
         $(".cstm-tile").hide();
         $(".cstm-colour").hide();
         $(".cstm-tile-image").hide();

      $(".solution_details").click(function(){
        $(".cstm-solution").toggle();
      });   

      $(".tile-spec").click(function(){
        $(".cstm-tile").toggle();
      });

      $(".colours").click(function(){
        $(".cstm-colour").toggle();
      });

      $(".tile-spec-image").click(function(){
        $(".cstm-tile-image").toggle();
      });
    });



$(".toogle-wrap").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
</script>
</script> 

    @include('partials/admin/footer')  