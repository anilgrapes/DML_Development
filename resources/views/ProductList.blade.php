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
                        <li class="breadcrumb-item active">List Product</li>
                    </ol>
                    <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="{{url('/Product')}}" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" >Add Product</a>
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
                       
                             <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>Product List</h5>
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">

                                <table class="table table-striped table-responsive" data-toggle="datatables">
                                    <thead>
                                        <tr>
                                            <th>SKU</th>
                                            <th>Product</th>
                                            <th>Action</th>
                                           
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	  @foreach($sku as $sku)
      
                                        <tr>

                                            <td>{{$sku->skuno}}</td>
                                            <td>{{$sku->productid}}</td>
                                            <td>Action</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                           
                                            <th>Office</th>
                                            <th>Age</th>
                                          
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
           
                       
                               
                             
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
              
              </div>
            <!-- /.widget-list -->
        </main>
@endsection
