@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stair Nosing Quotes</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('stair-quote-csv') }}">Export to CSV</a>
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
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company Name</th>
               
                    <th>Put it into</th>
                    <th>Photoluminescent</th>
                    <th>Stairs and their Width</th>
                    
                    <th>Shipped</th>
                    <th>Additional</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                  <?php $i=1; ?>
                @foreach ($stair_nosings as $stair_nosing)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$stair_nosing->name}}</td>
                    <td>{{$stair_nosing->lname}}</td>
                    <td>{{$stair_nosing->email}}</td>
                    <td>{{$stair_nosing->phone}}</td>
                    <td>{{$stair_nosing->company_name}}</td>
                    
                    <td>{{$stair_nosing->stair_put}}</td>
                    <td>{{$stair_nosing->photoluminescent}}</td>
                    <td>{{$stair_nosing->stair_width}}</td>
                    
                    <td>{{$stair_nosing->shipped}}</td>
                    <td>{{$stair_nosing->additional}}</td>
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