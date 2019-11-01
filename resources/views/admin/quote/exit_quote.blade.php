@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Exit Quotes</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                   <a href="{{ route('exit-quote-csv') }}">Export to CSV</a> 
                  </div>
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="box-body table-responsive no-padding users index large-9 medium-8 columns content">

                 <table id="example" class="table table-striped table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company Name</th>
                    
                    <th>Put Exit Signs On</th>
                    <th>Mounting Kit</th>
                    <th>Which Direction(s)</th>
                    <th>Need</th>
                    <th>Shipped</th>
                    <th>Additional</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                  <?php $i=1; ?>
                @foreach ($exit_signs as $exit_sign)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$exit_sign->name}}</td>
                    <td>{{$exit_sign->email}}</td>
                    <td>{{$exit_sign->phone}}</td>
                    <td>{{$exit_sign->company_name}}</td>
                    
                    <td>{{$exit_sign->exit_put}}</td>
                    <td>{{$exit_sign->mountain_kit}}</td>
                    <td>{{$exit_sign->direction}}</td>
                    <td>{{$exit_sign->need}}</td>   
                    <td>{{$exit_sign->shipped}}</td>
                    <td>{{$exit_sign->additional}}</td>
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