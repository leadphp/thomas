@include('partials/admin/header')
@include('partials/admin/sidebar')


 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Code Edit</h3>
                  
                </div>
                @include('partials/admin/msg')
                  <div class="row">
                    <div class="col-md-12">
        <form name="code-edit" method="POST" action="{{ route('code-update') }}"  enctype="multipart/form-data" >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$code->id}}">
       

        <div class="form-group">
            <label>Title: </label>
            <input type="text" name="title" value="@if ($errors->has('title')){{old('title')}}@else{{$code->title}}@endif">
        @if ($errors->has('title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif 
        </div>
        
         <div class="form-group">
            <label>Leaf: </label>
            <input type="radio" name="leaf" value="single" @if($code->leaf=='single')checked @endif> Single<br>
         
        </div>
        
          <div class="form-group">
            <label>Region: </label>
            <input type="radio" name="region" value="wc" @if($code->type=='wc')checked @endif >Western Canada<br>
            <input type="radio" name="region" value="cc" @if($code->type=='cc')checked @endif>Central Canada<br>
            <input type="radio" name="region" value="tm" @if($code->type=='tm')checked @endif>The Maritimes<br>
            <input type="radio" name="region" value="nc" @if($code->type=='nc')checked @endif>Northern Canada<br>
         
        </div>


        <div class="form-group">
            <label>Name 1: </label>
            <input type="text" name="name_1" value="@if ($errors->has('name_1')){{old('name_1')}}@else{{$code->name_1}}@endif">
        @if ($errors->has('name_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_1') }}
            </label>
        @endif 
        </div>  

        <div class="form-group">
            <label>Href 1: </label>
            <input type="text" name="href_1" value="@if ($errors->has('href_1')){{old('href_1')}}@else{{$code->href_1}}@endif">
        @if ($errors->has('href_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_1') }}
            </label>
        @endif 
        </div>  
         
            <div class="form-group">
            <label>Name 2: </label>
            <input type="text" name="name_2" value="@if ($errors->has('name_2')){{old('name_2')}}@else{{$code->name_2}}@endif">
        @if ($errors->has('name_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_2') }}
            </label>
        @endif 
        </div>  

        <div class="form-group">
            <label>Href 2: </label>
            <input type="text" name="href_2" value="@if ($errors->has('href_2')){{old('href_2')}}@else{{$code->href_2}}@endif">
        @if ($errors->has('href_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_2') }}
            </label>
        @endif 
        </div>  

               <div class="form-group">
            <label>Name 3: </label>
            <input type="text" name="name_3" value="@if ($errors->has('name_3')){{old('name_3')}}@else{{$code->name_3}}@endif">
        @if ($errors->has('name_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_3') }}
            </label>
        @endif 
        </div>  

        <div class="form-group">
            <label>Href 3: </label>
            <input type="text" name="href_3" value="@if ($errors->has('href_3')){{old('href_3')}}@else{{$code->href_3}}@endif">
        @if ($errors->has('href_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_3') }}
            </label>
        @endif 
        </div> 

          <div class="form-group">
            <label>Rate Type: </label>
            <input type="text" name="rate_type" value="@if ($errors->has('rate_type')){{old('rate_type')}}@else{{$code->rate_type}}@endif">
        @if ($errors->has('rate_type')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('rate_type') }}
            </label>
        @endif 
        </div> 

         <div class="form-group">
            <label>Provincial Rate: </label>
            <input type="text" name="provincial_rate" value="@if ($errors->has('provincial_rate')){{old('provincial_rate')}}@else{{$code->provincial_rate}}@endif">
        @if ($errors->has('provincial_rate')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('provincial_rate') }}
            </label>
        @endif 
        </div> 

       

        <div class="form-group">
            <label>Canada Rate: </label>
            <input type="text" name="canada_rate" value="@if ($errors->has('canada_rate')){{old('canada_rate')}}@else{{$code->canada_rate}}@endif">
        @if ($errors->has('canada_rate')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('canada_rate') }}
            </label>
        @endif 
        </div>

       <div class="form-group">
            
        <input type="submit" name="Submit" class="btn btn-primary" value="Update">
    </div>
      
      </form>
    </div>
        </div>
      </div>
</aside>

@include('partials/admin/footer')  