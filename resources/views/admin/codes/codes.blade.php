@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">


    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Codes</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('code-add') }}">Add New Codes</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                   <!--  <th scope="col">Title</th> -->
                    
                    <th scope="col">Href</th>
                    
                    
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  
                  @foreach ($codes as  $key => $code)
                  <tr>

                    <td>  {{ ($codes->currentpage()-1) * $codes->perpage() + $key + 1 }}</td>
                    <td>{{ $code->title }}</td>
                    <!-- <td> {{ $code->href_1 }} </td> -->
                    
                    

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                        <li><a href="code-edit/{{ $code->id }}" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                        <li><a href="code-view/{{ $code->id }}" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                        <li><a href="code-delete/{{ $code->id }}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>   
                                
                  @endforeach
                  

             
                            

                
                </tbody>
              </table>
                {{ $codes->links() }}
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>


@include('partials/admin/footer')  