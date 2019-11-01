    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
		<div class="content cstm-cms-data">
			<!-- Content Header (Page header) -->
			<div class="box-header" style="cursor: move;">
				<h3 class="box-title">Reference</h3>
			</div>
			@include('partials/admin/msg')
			<form name="sub_reference_edit" method="post" action="{{route('sub-reference-update')}}" enctype="multipart/form-data" >  
				<div class="row">
					<div class="col-md-10">
						<div class="cstm-solution">
							<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
							<input type = "hidden" name = "id" value = "{{$sub_reference_view->id}}">
							<input type = "hidden" name = "type" value = "sub">
							<div class="form-group">
								<label>Name: </label>
								<input type="text" name="name" value="{{$sub_reference_view->name}}" >
							</div>
							<div class="form-group pdf">
								<label>Reference : </label>
								<?php $ids[] = $sub_reference_view->reference_id; 
								  ?>
								<select  name="reference_id"  >
								   @foreach($references as $reference) 
								   @if (in_array($reference->id, $ids))
								   <option value="{{$reference->id}}" selected="">{{$reference->name}}</option>
									@else          
									<option value="{{$reference->id}}" >{{$reference->name}}</option>
								  @endif
								   @endforeach
								</select>
							</div>
							
						<div class="form-group ">
                                <label>Category : </label>
                                <?php $cat_id[] = $sub_reference_view->category_id; 
								  ?>
                                <select  name="category_id"  >
                                   <option value="" >--Select--</option>    
                                   @foreach($csc_categories as $csc_category) 
                                   	@if (in_array($csc_category->id, $cat_id))
                                   <option value="{{$csc_category->id}}" selected="" >{{$csc_category->title}}</option>
                                    @else
                                    <option value="{{$csc_category->id}}" >{{$csc_category->title}}</option>
                                    @endif
                                 
                                 
                                   @endforeach
                                </select>
                            </div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group pdffile">
									<label>Pdf: </label>
									@foreach($pdf_view as $pdf)
									<i class="fas fa-file-pdf"></i>
									<a href="{{ asset('public/images/reference/'.$pdf->pdf)}}">{{$pdf->original_pdf}}<br><br></a>
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
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-10">
						<div class="form-group">            
							<input type="submit" name="Submit" value="Save" class="btn btn-primary">
						</div>
					</div>
				</div>
			</form>
		</div>
    </aside>
	<script>
	  jQuery(function() {
			jQuery('#my-select').searchableOptionList({
			});
		});  
	</script>
    @include('partials/admin/footer')  