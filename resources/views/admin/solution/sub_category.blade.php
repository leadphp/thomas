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
                  <a href="{{ route('sub-category-add') }}">Add New Sub Category</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Meta Title</th>
                    
                    <th scope="col">Meta Keyword</th>
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  
                  @foreach($sub_category_view as $category)
                  <?php  
        
                  $ids = explode(',',$category->category_id);
                  $value = \App\category::whereIn('id',$ids)->get();
                  $cat = "";
                  foreach ($value as $i => $k) {  
                  $cat .= $k->title;
                  $cat .= ($i + 1) < count($value) ? ', ' : '';
                  }
                  
                  ?>  
                  <tr>

                    <td>{{ $category->id}}</td>
                    <td>{{ $category->title}}</td>

                  
                    <td>{{ $cat}}</td>
                    
                    <td>{{ $category->meta_title}}</td>
                    <td>{{ $category->meta_keyword}}</td>
                    
                 

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="sub-category-edit/{{ $category->id}}" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="sub-category-view/{{ $category->id}}" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="sub-category-delete/{{ $category->id}}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>                  
                  
                  @endforeach

                  
               
                       {{ $sub_category_view->links() }}      

                
                </tbody>
              </table>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>


@include('partials/admin/footer')  