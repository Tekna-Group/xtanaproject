@extends('layouts.header')

@section('content')

<div class="checkout">
    
  <div class="card shadow-none position-relative overflow-hidden mb-4">
      <div class="card-body d-flex align-items-center justify-content-between p-4">
        <h4 class="fw-semibold mb-0">Invoices</h4>
        <nav aria-label="breadcrumb">
          
        </nav>
      </div>
    </div>
    <div class="card card-body">
      <div class="row">
        <div class="col-md-4 col-xl-3">
          <form class="position-relative">
            <input type="text" class="form-control product-search ps-5" id="input-search"
              placeholder="Search Invoice..." />
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        
      </div>
    </div>
    
    <div class="card card-body">
      <div class="table-responsive">
        <table class="table search-table align-middle text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Date</th>
              <th>Service</th>
              <th>Description</th>
              <th>Total</th>
              <th>Paid</th>
              <th>Link</th>
            </tr>
          </thead>
          <tbody>
            @foreach($invoices as $invoice)
              <tr>
                <td>{{$invoice->id}}</td>
                <td>{{date('M d,Y',strtotime($invoice->created_at))}}</td>
                <td>{{$invoice->service}}</td>
                <td>{{$invoice->description}}</td>
                <td>$ {{number_format($invoice->amount,2)}}</td>
                <td><a href='#' class='text-success' data-bs-toggle="modal"
                  data-bs-target="#bs-example-modal-md{{$invoice->id}}"><i class="fa fa-check success" ></i></a></td>
                <td>
                  <a href='#' class='text-warning' data-bs-toggle="modal"
                  data-bs-target="#view-invoice{{$invoice->id}}"><i class="fa fa-eye" ></i></a>
                </td>
              </tr>
              @include('payment')
              @include('view_invoice')
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>


@endsection
@section('javascript')
<script src="{{asset('design/assets/js/apps/invoice.js')}}"></script>
<script src="{{asset('design/assets/js/apps/jquery.PrintArea.js')}}"></script>
@endsection
