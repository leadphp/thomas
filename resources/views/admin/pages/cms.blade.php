@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pages</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('cms_add') }}">Add New Page</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    
                    <th scope="col">Meta Title</th>
                    
                    <th scope="col">Meta Keyword</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  <?php $i=1;?>
                  @foreach ($cms_data as $cms)
                  <tr>

                    <td>{{ $i }}</td>
                    <td>{{ $cms->page_name }}</td>

                    <!-- <td><?php echo html_entity_decode( $cms->body ) ?></td> -->
                    <td>{{ $cms->meta_title }}</td>
                    
                    <td>{{ $cms->meta_keyword }}</td>

                    
                      <td>
                      	
         
         	<a href="javascript:;" class="status" data-url="{{ route('set_cms_status_ajax') }}" data_id="{{ $cms->id }}" data-status="{{ $cms->status }}">
         		@if($cms->status  =='on')
         		<span class="label label-success span_status" >Active</span></a>
         		@else 
         		<span class="label label-danger span_status" >Inactive</span>
         		@endif
         	</a>
         	
         
		
                      </td>

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="cms_edit/{{ $cms->id }}" data-toggle="tooltip" title="Edit" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="cms_view/{{ $cms->id }}" data-toggle="tooltip" title="View" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="cms_delete/{{ $cms->id }}" class="action-btn btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this record?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>                  
                  <?php $i++;?>
                  @endforeach

             
                            

                
                </tbody>
              </table>
                {{ $cms_data->links() }}
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>


@include('partials/admin/footer')  