@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reference</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('reference-add') }}">Add New Reference</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    
                    
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  <?php $i=1;?>
                  @foreach($references as $reference)
                  <tr>

                    <td>{{ $i }}</td>
                    <td>{{ $reference->name }}</td>

                  
                    

                    
                 

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="reference-edit/{{$reference->id}}" data-toggle="tooltip" title="Edit"
                      class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="reference-view/{{$reference->id}}" class="btn btn-primary action-btn" data-toggle="tooltip" title="View"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="reference-delete/{{$reference->id}}" data-toggle="tooltip" title="Delete" class="action-btn btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>   
                  <?php $i++; ?>               
                  @endforeach
                  

               {{ $references->links() }}   
                            

                
                </tbody>
              </table>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>


@include('partials/admin/footer')  