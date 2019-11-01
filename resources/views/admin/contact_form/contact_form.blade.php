@include('partials/admin/header')
@include('partials/admin/sidebar')


<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Form</h3>
              <div class="box-tools">
                <div class="input-group" style="float: right;">
                  <a href="">Export to CSV</a>
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
                    <th>Subject</th>
                    <th>Message</th>

                    
                    
                </tr>
            </thead>
            <tbody>
                  <?php $i=1; ?>
                @foreach ($contact_forms as $contact_form)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$contact_form->name}}</td>
                    <td>{{$contact_form->email}}</td>
                    <td>{{$contact_form->subject}}</td>
                    <td>{{$contact_form->message}}</td>
                    
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