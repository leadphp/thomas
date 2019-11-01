@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">How It Works</h3>
              <div class="box-tools">
               
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Content</th>
                    
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  @foreach ($how_it_works as $how_it_work)
                  
                  <tr>

                    <td>{{ $how_it_work->id }}</td>
                    <td><?php echo $how_it_work->content ?></td>

                    
                    

                    
                                 
                    
                      <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="how-it-works-edit/{{$how_it_work->id}}" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="how-it-works-view/{{$how_it_work->id}}" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                     
                     </ul>
                    </td>   
                  </tr>                  

                  @endforeach
                  

             {{ $how_it_works->links() }}  
                            

                
                </tbody>
              </table>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>
@include('partials/admin/footer')  