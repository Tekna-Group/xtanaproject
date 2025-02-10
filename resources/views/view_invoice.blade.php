<div id="view-invoice{{$invoice->id}}" class="modal fade" tabindex="-1"
aria-labelledby="bs-example-modal-md" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
  <div class="modal-content">
    <div class="modal-header d-flex align-items-center">
      <h4 class="modal-title" id="myModalLabel">
        Invoice
      </h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="p-3" id="custom-invoice">
            <div class="invoice-123" id="printableArea">
              <div class="row pt-3">
                <div class="col-md-12">
                  <div>
                    <address>
                      <h6>&nbsp;From,</h6>
                      <h6 class="fw-bold">&nbsp;Xtana</h6>
                      <p class="ms-1">
                        1108, Clair Street, <br />Massachusetts,
                        <br />Woods Hole - 02543
                      </p>
                    </address>
                  </div>
                  <div class="text-end">
                    <address>
                      <h6>To,</h6>
                      <h6 class="fw-bold invoice-customer">
                        {{$invoice->user->user_profile ? $invoice->user->user_profile->first_name. " ".$invoice->user->user_profile->last_name : $invoice->user->name}} ,
                      </h6>
                      <p class="ms-4">
                        {{$invoice->user->user_profile ? $invoice->user->user_profile->address : ''}} 
                      </p>
                      <p class="mt-4 mb-1">
                        <span>Invoice Date :</span>
                        <i class="ti ti-calendar"></i>
                        {{date('M d,Y',strtotime($invoice->created_at))}}
                      </p>
                      <p>
                        <span>Due Date :</span>
                        <i class="ti ti-calendar"></i>
                        {{date('M d,Y',strtotime($invoice->created_at))}}
                      </p>
                    </address>
                  </div>
                </div>
                <div class="col-md-4 border">
                    Service
                </div>
                <div class="col-md-4 border">
                    Description
                </div>
                <div class="col-md-2 border">
                    Qty
                </div>
                <div class="col-md-2 border">
                   Total Amount
                </div>
                @foreach($invoice->items as $item)
                <div class="col-md-4 border">
                    {{$item->service}}
                </div>
                <div class="col-md-4 border">
                    {{$item->description}}
                </div>
                <div class="col-md-2 border">
                    {{number_format($item->qty,2)}}
                </div>
                <div class="col-md-2 border">
                    {{number_format($item->total_amount,2)}}
                </div>
                @endforeach
                <div class="col-md-12">
                  <div class="pull-right mt-4 text-end">
                    <p>Sub - Total amount: $ {{number_format($invoice->amount,2)}}</p>
                    {{-- <p>vat (10%) : $2,085</p> --}}
                    <hr />
                    <h3><b>Total :</b> $ {{number_format($invoice->amount,2)}}</h3>
                  </div>
                  <div class="clearfix"></div>
                  <hr />
                  {{-- <div class="text-end">
                    <button class="btn bg-danger-subtle text-danger" type="submit">
                      Proceed to payment
                    </button>
                    <button class="btn btn-primary btn-default print-page ms-6" type="button">
                      <span><i class="ti ti-printer fs-5"></i>
                        Print</span>
                    </button>
                  </div> --}}
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn bg-danger-subtle text-danger  waves-effect"
        data-bs-dismiss="modal">
        Close
      </button>
    </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>