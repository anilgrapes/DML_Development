@extends('layout.mainlayout')

@section('title', 'Paid Payments')

@section('distinct_head')

<link href="<?=URL::to('/');?>/cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

@endsection

@section('body_class', 'header-light sidebar-dark sidebar-expandheader-light sidebar-dark sidebar-expand')

@section('content')
<main class="main-wrapper clearfix">
  <!-- Page Title Area -->
  <div class="row page-title clearfix">
    {{ Breadcrumbs::render('payment.paidpayment') }}
      <!-- /.page-title-right -->
     
      <!-- /.page-title-right -->
  </div>
  <!-- /.page-title -->
  <!-- =================================== -->
  <!-- Different data widgets ============ -->
  <!-- =================================== -->
  <div class="widget-list">
      <div class="row">
          <div class="col-md-12 widget-holder">
              <div class="widget-bg">
                  <div class="widget-heading clearfix">
                      <h5 class="border-b-light-1 pb-1 mb-2 mt-0 w-100">{{'Paid Payments'}}</h5>
                  </div>
                  <!-- /.widget-heading -->
                    <div class="widget-body clearfix dataTable-length-top-0">
                      @if ($message = Session::get('success'))
                      <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="material-icons list-icon">check_circle</i>
                        <strong>Success</strong>: {{ $message }}
                      </div>
                      @endif
                       @if (session('errors'))
                               <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  <i class="material-icons">highlight_off</i>
                                   <strong>error</strong>: {{ session('errors') }}
                              </div>
                             @endif

                     <!--   <a href="{{ URL::previous() }}" class="btn btn-info btn-top-right2 small-btn-style">Go Back</a> -->
                       <table class="paidpayment table table-striped table-center table-responsive" >

                          <thead>
                              <tr class="bg-primary">
                                  <th>No</th>
                                  <th>Customer Name</th>
                                  <th>Invoice Number</th>
                                  <th>Invoice Amount</th>
                                  <th>Due Date</th>
                                  <th>Payment Form</th>
                                  <th>Payment Header</th>
                                  <th>Created Date</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                             <tbody>
                              @foreach ($paid as $value)
                                  <tr> 
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->customer_name}}</td>
                                    <td>{{ $value->invoice_number}}</td>
                                    <td><?=CommonHelper::covertToCurrency($value->invoice_amount);?></td>
                                    <td>{{ $value->due_date}}</td>
                                    <td>{{ $value->payment_form}}</td>
                                    <td>
                                        {{ $value->name}}
                                    </td>
                                    <td>{{$value->created_at->format('Y-m-d')}}</td>
                                    <td value="{{$value->account_status}}">
                                      <a  href="{{action('PaymentController@paidtransaction',$value->id)}}" onclick=" ">
                                        <i class="material-icons"  title="View Transaction">remove_red_eye</i></a>
                                        <a class="color-content table-action-style" href="{{ route('accountpayment.pdflisting',['id'=>$value->id]) }}"><i class="material-icons md-18">file_download</i></a> 
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                                  <th>No</th>
                                  <th>Customer Name</th>
                                  <th>Invoice Number</th>
                                  <th>Invoice Amount</th>
                                  <th>Due Date</th>
                                  <th>Payment Form</th>
                                  <th>Payment Header</th>
                                  <th>Created Date</th>
                                  <th>Action</th>
                            </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>
     </div>
 </main>

@endsection

@section('distinct_footer_script')
<script src="<?=URL::to('/');?>/cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script type="text/javascript">
  var buttonCommon = {
        exportOptions: {
            format: {
                body: function ( data, row, column, node ) {
                    if (column === 3) {
                      data = data.replace('₹ ', '');
                    }
                    return data;
                }
            }
        }
    };
    $('.paidpayment').DataTable({
        "dom":"<'row'<'col col-lg-3'l>><'row'<'col'B><'col'f>>" +
              "<'row'<'col-sm-12' <'paidpayment-main scroll-lg' tr>>>"+"<'row'<'col-sm-5'i><'col-sm-7'p>>",    

        "order": [1,"desc"],
          "language": {
        "infoEmpty": "No matched records found",
        "zeroRecords": "No matched records found",
        "emptyTable": "No data available in table",
        //"sProcessing": "<div id='loader'></div>"
      },
    "buttons": [
    $.extend( true, {}, buttonCommon, {
      extend: 'csv',
      footer: false,
      title: 'Paid_payments',
      className: "btn btn-primary btn-sm px-3",
      exportOptions: {
          columns: [0,1,2,3,4,5,6,7],
          orthogonal: 'export'
      }
    }),
    $.extend( true, {}, buttonCommon, {
      extend: 'excel',
      footer: false,
      title: 'Paid_payments',
      className: "btn btn-primary btn-sm px-3",
      exportOptions: {
          columns: [0,1,2,3,4,5,6,7],
          orthogonal: 'export'
      }
    })
  ],
      "deferLoading": <?=$totalcount?>,
      "processing": true,
      "serverSide": true,
      "serverMethod": "GET",
      "ajax":{
        "url": "{{action('PaymentController@paidpayment_response')}}",
        "data": function(data, callback){
          data._token = "{{ csrf_token() }}";
        },
      },
      "columnDefs": [ {
    "targets": [0,5,6,7,8],
    "orderable": false
    }
  ]  
    });
</script>
@endsection
