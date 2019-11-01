@include('partials/admin/header')
@include('partials/admin/sidebar')

<?php $select_ids= implode(",",$id)?>
<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Newsletter</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <!-- <a href="{{ route('blog-add') }}">Add New Blog</a> -->
                  </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <form name="send-mail" class="cust-form" method="POST" action="{{route('send-mail')}}">
                @csrf

             <input type="hidden" name="id" value="{{$select_ids}}">
        
            <label>Please type the content for the E-mail</label>
          <textarea name="description"></textarea>
            
        
        <input type="submit" name="submit" value="Send E-mail" class="btn btn-primary">
               </form>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>

<!-- <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   -->
@include('partials/admin/footer')  