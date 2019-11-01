@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tactile Quotes</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="{{ route('quote-csv') }}">Export to CSV</a> 
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
                    
                    <th>Put Tactile On</th>
                    <th>Material</th>
                    <th>Type</th>
                    <th>Attention Domes or Wayfinding Bars</th>
                    <th>Area</th>
                    <th>Shipped</th>
                    <th>Additional</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                  <?php $i=1; ?>
                @foreach ($quotes as $quote)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$quote->name}}</td>
                    <td>{{$quote->email}}</td>
                    <td>{{$quote->phone}}</td>
                    <td>{{$quote->company_name}}</td>
                    
                    <td>{{$quote->put}}</td>
                    <td>{{$quote->material}}</td>
                    <td>{{$quote->type}}</td>
                    <td>{{$quote->att_domes}}</td>
                    <td>{{$quote->area}}</td>   
                    <td>{{$quote->shipped}}</td>
                    <td>{{$quote->additional}}</td>
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