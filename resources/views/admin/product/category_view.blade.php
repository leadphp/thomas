    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">CSC Category</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
                <div class="toogle-wrap">
                    <div class="togglebtn toggle-click">
        <input type="button" class="solution_details cstm-accor" value="CSC Category Section">
        <i class="fa fa-plus solution_details"></i>
    </div>
</div>
                    <div class="cstm-solution">
        <form name="solution_view" method="post">
        
        
        <input type="hidden" name="csc_type" class="csc_type" value="{{$product_view->csc_type}}">
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{ $product_view->title }}" disabled="">
       @if ($errors->has('title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif 
        </div>

                <div class="form-group">
                            <label>Banner Image: </label>
                             <img src="{{ asset('public/images/product/banner/'.$product_view->banner_image) }}" class="tt">
                        </div>
                        <div class="form-group">
                            <label>Alt Banner Image: </label>
                            <input type="text" name="alt_banner_image" value="{{$product_view->alt_banner_image}}" disabled="">
                        </div>

        <div class="form-group">
            <label>Price: </label>
            <input type="text" name="price" value="{{$product_view->price}}" disabled="">
         
        </div>                
      
        <div class="form-group textarea">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description" disabled="" class="disabled"> {{ $product_view->description }} </textarea>
       @if ($errors->has('description')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('description') }}
            </label>
        @endif 
        </div>
        
        <div class="form-group">
            <label>Image: </label>
            <img src="{{ asset('public/images/product/'.$product_view->image) }}" class="tt">
        </div>
          <div class="form-group">
        <label>Alt Image: </label>
        <input type="text" name="image_alt" value="{{$product_view->image_alt}}" disabled="">
        </div>

        <div class="form-group display_none">
            <label> Product Features: </label>              
            <textarea rows="4" cols="50" name="product_features" disabled=""> {{$product_view->product_features}}</textarea>
            
        </div>

        <div class="form-group display_none">
            <label> Available Cast-In-Place Tile Sizes And Prices: </label>             
            <textarea rows="4" cols="50" name="size_price" disabled=""> {{$product_view->size_price}}</textarea>
            
        </div>

        <div class="form-group display_none">
            <label> Application: </label>               
            <textarea rows="4" cols="50" name="application" disabled="">{{$product_view->application}}</textarea>
            
        </div>  

    
        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{ $product_view->meta_title }}" disabled="">
       @if ($errors->has('meta_title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_title') }}
            </label>
        @endif 
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description" disabled=""> {{ $product_view->meta_description }} </textarea>
        @if ($errors->has('meta_description')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_description') }}
            </label>
        @endif 

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{ $product_view->meta_keyword }}" disabled="">
        @if ($errors->has('meta_keyword')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_keyword') }}
            </label>
        @endif 
   
    </div>
   
       
   

      
   
       
    
        </form>
    </div>
</div>

</div>

        <div class="row paddtop display_none">
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
        <div class="row paddtop display_none">
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



      
    </aside>
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    
    CKEDITOR.replace( 'product_features' );
    CKEDITOR.replace( 'size_price' );
    CKEDITOR.replace( 'application' );
 
 </script> 


    
<script type="text/javascript">
              
    $(document).ready(function(){

        var csc_type = $('.csc_type').val();

        if(csc_type =='only')
        {
            $('.display_none').show();
        }
        else
        {
            $('.display_none').hide();

        }
        
         
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


</script>


<script>
$(".toogle-wrap").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
</script>


    @include('partials/admin/footer')  