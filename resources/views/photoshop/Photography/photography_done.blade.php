
@extends('layout.photo_navi')


@section('title', 'Photoshop')

@section('distinct_head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="<?=URL::to('/');?>/cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<style>
    table, td, th {
      
       width: 300px;
    }
 </style>
@endsection

@section('body_class', 'header-light sidebar-dark sidebar-expandheader-light sidebar-dark sidebar-expand')

@section('content')
<main class="main-wrapper clearfix">
  <!-- Page Title Area -->
  <div class="row page-title clearfix">
    {{ Breadcrumbs::render('photography.done') }}
      <!-- /.page-title-right -->
  </div>
  <!-- /.page-title -->
  <!-- =================================== -->
  <!-- Different data widgets ============ -->
  <!-- =================================== -->
  <div class="col-md-12 widget-holder loader-area" style="display: none;">
    <div class="widget-bg text-center">
      <div class="loader"></div>
    </div>
  </div>
  	<div class="widget-list">
      	<div class="row">
  			<div class="col-md-12 widget-holder content-area">
  				<div class="widget-bg">
  					<div class="widget-heading clearfix">
  						<h5 class="border-b-light-1 pb-1 mb-2 mt-0 w-100">Product List</h5>
						
					  </div>
					  @if(Session::has('success'))
					  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
					  @endif
  					<div class="widget-body clearfix dataTable-length-top-0">
  						
	                    <table class="table table-striped table-center word-break mt-0"   data-toggle="datatables" >
  							<thead>
  								<tr class="bg-primary">
  									<th>Sku</th>
									  <th>Color</th>
                                      <th>Category</th>
                                      <th>Status</th>
  									<th>Action</th>
  								
  								</tr>
  							</thead>
  							<tbody>
		 @foreach ($donelist as $item)
		<?php 
      $arr = explode(' ', $item->sku);
	  $len=count($arr);
		?>
	
	<tr>
		<td><?php echo $arr[0];?></td>
		<td><?php
		if($len==5)
		{
			echo $arr[2]." ".$arr[3];
		}else {
			echo $arr[2];
		}
		
		?>
		</td>
    <td>{{$item->name}}</td>
    <td>{{$item->status_name}}</td>
		<td style="    float: right;">
			<form action="" method="POST">
             <input type="hidden" value="{{$item->id}}" name="id"/>
		    <input type="hidden" value="{{$item->entity_id}}" name="product_id"/>
			<input type="hidden" value="{{$item->attribute_set_id}}" name="category_id"/>
				@csrf
				<select name="status" class="form-control" style="height:20px;width:150px;float: left;">
					<option value="0">select status</option>
					<option value="4">Rework</option>
				</select>
				<input type="submit" style="height: 20px;
                float: left;
                margin-left: 6px;" class="btn btn-primary" value="Submit"/>
		
			</form>
			</td>
	
	
	</tr>

									
									@endforeach
							  </tbody>
							  <tfoot>
								<tr class="bg-primary">
									<th>Sku</th>
									<th>Color</th>
                                    <th>Category</th>
                                    <th>Status</th>
									<th>Action</th>
								
								</tr>
							</tfoot>
	  					</table>
  					</div>
  				</div>
  			</div>
  		</div>
    </div>
  <!-- /.widget-list -->
</main>
<!-- /.main-wrappper -->

<style type="text/css">
.form-control[readonly] {background-color: #fff;}
</style>
@endsection

@section('distinct_footer_script')
<script src="<?=URL::to('/');?>/cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script src="<?=URL::to('/');?>/js/jquery.validate.min.js"></script>
<script src="<?=URL::to('/');?>/js/additional-methods.min.js"></script>

@endsection