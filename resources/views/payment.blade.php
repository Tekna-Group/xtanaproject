<div id="bs-example-modal-md{{$invoice->id}}" class="modal fade" tabindex="-1"
aria-labelledby="bs-example-modal-md" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
  <div class="modal-content">
    <div class="modal-header d-flex align-items-center">
      <h4 class="modal-title" id="myModalLabel">
        Payment
      </h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h4>
        Reference #: {{$invoice->payment->token_id}}
      </h4>
      <hr>
      <h6>Amount: $ {{number_format($invoice->payment->sum('amount'),2)}}</h6>
      <h6>Card: ****** {{$invoice->payment->last}}</h6>
      
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