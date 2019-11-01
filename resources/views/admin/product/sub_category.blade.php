@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CSC Sub Category</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('csc-sub-category-add') }}">Add New Sub Category</a>                </div>
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

                  @php $cc = 0; @endphp
                  @foreach($sub_product as $cat)
                  <tr>
<?php  
DB::enableQueryLog();

 $ids = explode(',',$cat->category_id);

    $value = \App\csc_category::whereIn('id',$ids)->get();
   

   $category = "";
    foreach ($value as $i => $k) {
          
          $category .= $k->title;
          $category .= ($i + 1) < count($value) ? ', ' : '';
    }

   

?>

                    <td>{{ $cat->id}}</td>
                    <td>{{ $cat->title}}</td>

                  
                    <td>{{$category}}</td>
                    
                    <td>{{ $cat->meta_title}}</td>
                    <td>{{ $cat->meta_keyword}}</td>
                    
                 

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="csc-sub-category-edit/{{ $cat->id}}" class="btn btn-info action-btn" data-toggle="tooltip" title="Edit"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="csc-sub-category-view/{{ $cat->id}}" class="btn btn-primary action-btn" data-toggle="tooltip" title="View"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="csc-sub-category-delete/{{ $cat->id}}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" data-toggle="tooltip" title="Delete"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>                  
                  
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