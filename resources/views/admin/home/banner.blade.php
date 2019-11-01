@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">


    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Banner Image</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('banner_add') }}">Add New Banner</a>                </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

              <table class="table table-hover cstm-cms-table" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    
                    <th scope="col">Image Alt</th>
                    
                    
                    
                    <th scope="col" class="actions">Actions</th>                 
                  </tr>

                  
                  @foreach ($banner_homes as $banner_home)
                  <tr>

                    <td>{{ $banner_home->id }}</td>
                    <td> <img src="{{ asset('public/images/front/home/banner/'.$banner_home->image) }}" > </td>

                    
                    <td> {{ $banner_home->image_alt }} </td>
                    
                    

                     
                    
                    <td class="actions">
                      <ul class="action_btns_wrap">
                        <li><a href="banner-edit/{{ $banner_home->id }}" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                        <li><a href="banner-view/{{ $banner_home->id }}" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                        <li><a href="banner-delete/{{ $banner_home->id }}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>   
                  </tr>                  
                  @endforeach
                  

             
                            

                
                </tbody>
              </table>
                {{ $banner_homes->links() }}
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>


@include('partials/admin/footer')  