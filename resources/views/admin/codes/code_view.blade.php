@include('partials/admin/header')
@include('partials/admin/sidebar')


 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Codes</h3>
                  
                </div>
                @include('partials/admin/msg')
                  <div class="row">
                    <div class="col-md-10">
        <form name="banner-view" >
        
        
          
        <div class="form-group">
            <label>Title: </label>
            <input type="text" name="title" value="{{$code->title}}" disabled="">
        </div>

        <div class="form-group">
            <label>Name 1: </label>
            <input type="text" name="name_1" value="{{$code->name_1}}" disabled="">
        </div>  

        <div class="form-group">
            <label>Href 1: </label>
            <input type="text" name="href_1" value="{{$code->href_1}}" disabled="">
        </div>  

        <div class="form-group">
            <label>Name 2: </label>
            <input type="text" name="name_2" value="{{$code->name_2}}" disabled="">
        </div>  

        <div class="form-group">
            <label>Href 2: </label>
            <input type="text" name="href_2" value="{{$code->href_2}}" disabled="">
        </div>  

        <div class="form-group">
            <label>Name 3: </label>         
              <input type="text" name="name_3" value="{{$code->name_3}}" disabled="">
        </div>  

        <div class="form-group">
            <label>Href 3: </label>
            <input type="text" name="href_3" value="{{$code->href_3}}" disabled="">
        </div> 

        <div class="form-group">
            <label>Rate Type: </label>
            <input type="text" name="rate_type" value="{{$code->rate_type}}" disabled="">
        </div> 
        <div class="form-group">
            <label>Provincial Rate: </label>
            <input type="text" name="provincial_rate" value="{{$code->provincial_rate}}" disabled="">
        </div> 
        <div class="form-group">
            <label>Canada Rate: </label>
            <input type="text" name="canada_rate" value="{{$code->canada_rate}}" disabled="">
        </div> 

 
         
      </form>
    </div>
        </div>
      </div>
</aside>

   

@include('partials/admin/footer')  