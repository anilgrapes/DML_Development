@extends('layouts.app')

@section('content')
   <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Product List</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">Add Product</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                    <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="{{url('/Productlist')}}" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">List Product</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                       
                            <form action="" method="POST">
                            	{{ csrf_field() }}
                            	         <h5 class="box-title mr-b-0">Add Product</h5>
                               <br><br>

                                <div class="row mr-b-50">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">SKU</label>
                                        <input type="text" class="form-control" name="skuno" id="validationServer01" placeholder="SKU" >
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Product id</label>
                                        <input type="text" class="form-control" name="productid" id="validationServer02" placeholder="Product id" >
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Category</label>
                                        <input type="text" class="form-control" name="category" id="validationServer02" placeholder="Category" >
                                    </div>
                                   <div class="col-md-12 mb-3">
                                       
                                        <input type="submit" style="float: right" class="btn  btn-lg btn-color-scheme ripple" value="Save">
                                    </div>
                                  
                                </div>
                                

                            </form>
                       
                               
                             
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
              
              </div>
            <!-- /.widget-list -->
        </main>
@endsection
