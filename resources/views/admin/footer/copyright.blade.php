@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">@Copy-Right</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="category_add" method="post" action="{{ route('blog-category-save') }}">
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
    
         <div class="form-group">
        <label>Copy-Right: </label>
     
        <input type="text" name="copyright" value="{{old('copyright')}}">
          @if ($errors->has('copyright')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('copyright') }}
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




@include('partials/admin/footer')  