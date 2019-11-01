@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Category</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="category_add" >
        
        
        
    
         <div class="form-group">
        <label>Category Title: </label>
     
        <input type="text" name="category_title" value="{{$blog_category->category_title}}" disabled="">
        
        </div>

           <div class="form-group">
        <label>Slug: </label>
     
        <input type="text" name="category_title" value="{{$blog_category->slug}}" disabled="">
        
        </div>

         <div class="form-group">
        <label>Banner Image: </label>
       
        <img src="{{ asset('public/images/blog/category/'.$blog_category->banner_image) }}"">
     
    </div>

    <div class="form-group">
        <label>Alt Banner Image: </label>
       
        <input type="text" name="alt_image" value="{{ $blog_category->alt_banner_image}}" disabled="">
     
    </div>

        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{ $blog_category->meta_title}}" disabled="">
      
        </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description" disabled=""> {{ $blog_category->meta_description}} </textarea>
       

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{ $blog_category->meta_keyword}}" disabled="">
  
   
    </div>

           
        
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




@include('partials/admin/footer')  