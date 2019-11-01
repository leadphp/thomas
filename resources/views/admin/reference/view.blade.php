    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Reference</h3>
                  
                </div>
        
        @include('partials/admin/msg')
         
        <div class="row">
            <div class="col-md-10">
        
                    <div class="cstm-solution">
        
        
        
        
    
         <div class="form-group">
        <label>Name: </label>
     
        <input type="text" name="title" value="{{$reference_view->name}}" disabled="">
       
        </div>

        @if($reference_view->type == 'Single')
            <div class="form-group">
            <label>Pdf: </label>
            @foreach($pdf_view as $pdf)
            <a href="{{ asset('public/images/reference/'.$pdf->pdf)}}">{{$pdf->original_pdf}}</a>
            @endforeach
            </div>



        @endif


      
   
       
    
        
    </div>
</div>

</div>

   



      
    </aside>



    @include('partials/admin/footer')  