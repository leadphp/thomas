    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Reference</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <form name="reference_edit" method="post" action="{{route('reference-update')}}" enctype="multipart/form-data" >  
        <div class="row">
            <div class="col-md-10">
        
                    <div class="cstm-solution">
        
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$reference_view->id}}">
        <input type = "hidden" name = "type" value = "main">
        
    
         <div class="form-group">
        <label>Name: </label>
     
        <input type="text" name="name" value="{{$reference_view->name}}" >
       
        </div>

        @if($reference_view->type == 'Single')
        <div class="row">
            <div class="col-md-6">
            <div class="form-group pdffile">
            <label>Pdf: </label>
            @foreach($pdf_view as $pdf)
            <i class="fas fa-file-pdf"></i>
            <a href="{{ asset('public/images/reference/'.$pdf->pdf)}}">{{$pdf->original_pdf}}</a>
            @endforeach
            </div>
        </div>


       <div class="col-md-6">
            <div class="form-group">
            <label>Pdf: </label>
            <input type="file" name="pdf[]" value="" multiple>
            </div>
        </div>
        </div>

        @endif


      
   
       
    
        
    </div>
</div>

</div>

        <div class="row paddtop">
    <div class="col-md-10">
        <div class="form-group">            
            <input type="submit" name="Submit" value="Save" class="btn btn-primary">
        </div>
    </div>
    </div>

   
</form>


      
    </aside>



    @include('partials/admin/footer')  