@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blogs</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('blog-add') }}">Add New Blog</a>
                  </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

                 <table id="example" class="table table-striped table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                  <?php $i=1; ?>
                @foreach ($blog as $blog_data)
                <tr>
                    <td>{{ $i}}</td>
                    <td>{{ $blog_data->title}}</td>
                    <td>{{ $blog_data->category_title}}</td>
                    <td class="blog_image"><img src="{{ asset('public/images/blog/'.$blog_data->image) }}"></td>
                    
                       <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="blog-edit/{{$blog_data->id}}" class="btn btn-info action-btn" data-toggle="tooltip" title="Edit"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="blog-view/{{$blog_data->id}}" class="btn btn-primary action-btn" data-toggle="tooltip" title="View"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="blog-delete/{{$blog_data->id}}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" data-toggle="tooltip" title="Delete"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td> 
                    
                </tr>
                <?php $i++;?>
              @endforeach
               
            </tbody>
            
        </table>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>

<!-- <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   -->
@include('partials/admin/footer')  