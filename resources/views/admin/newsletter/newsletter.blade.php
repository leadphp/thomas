@include('partials/admin/header')
@include('partials/admin/sidebar')


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

              <form name="e-mail" class="cust-form" method="POST" action="{{route('email-newsletter')}}">
                @csrf
                 <table id="example" class="table table-striped table-bordered " style="width:100%">
            <thead>
                <tr><th></th>
                    <th>Id</th>
                    <th>E-mail</th>
                    
                    <!-- <th>Action</th> -->
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($newsletters as $newsletter)
                  
                <tr>
                    <td><input type="checkbox" name="mail[]" value="{{$newsletter->id}}"></td>
                    <td>{{ $newsletter->id}}</td>
                    <td>{{ $newsletter->email}}</td>
                    
                    
                    
                    <!--    <td class="actions">
                      <ul class="action_btns_wrap">
                     <li> <a href="newsletter-edit/{{$newsletter->id}}" class="btn btn-info action-btn"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
                     <li> <a href="newsletter-view/{{$newsletter->id}}" class="btn btn-primary action-btn"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a></li>
                              
                      <li> <a href="newsletter-delete/{{$newsletter->id}}" class="action-btn btn btn-danger" onclick="return confirm('Are you sure?')" ><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                     </ul>
                    </td>  -->
                    
                </tr>
              @endforeach
            </tbody>
            
        </table>
        <input class="cust-new-btn" type="submit" name="submit" value="Send E-mail">
               </form>
                
              </div>               
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>

<!-- <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   -->
@include('partials/admin/footer')  