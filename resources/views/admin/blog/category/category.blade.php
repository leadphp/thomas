@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('blog-category-add') }}">Add New Category</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0" id="blog-category">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Category</th>
                    
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>
                  <?php $i=1; ?>
                  @foreach ($blog_categories as $key=>$blog_category)
                  
                  <tr>

                    <td>{{ ($blog_categories->currentpage()-1) * $blog_categories->perpage() + $key + 1 }}</td>
                    <td>{{ $blog_category->category_title }}</td>

                    
                    

                    
                                 
                    
                      <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="blog-category-edit/{{ $blog_category->id }}" class="btn btn-info action-btn" data-toggle="tooltip" title="Edit"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="blog-category-view/{{ $blog_category->id }}" class="btn btn-primary action-btn" data-toggle="tooltip" title="View"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="blog-category-delete/{{ $blog_category->id }}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" data-toggle="tooltip" title="Delete"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>                  
                  <?php $i++; ?>
                  @endforeach
                  

             
                            

                
                </tbody>
              </table>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>
@include('partials/admin/footer')  