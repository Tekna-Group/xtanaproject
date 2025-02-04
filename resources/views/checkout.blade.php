@extends('layouts.header')

@section('content')
<div class="checkout">
    <div class="card shadow-none border">
      <div class="card-body p-4">
        <div class="wizard-content">
          <form action="#" class="tab-wizard wizard-circle">
            <!-- Step 1 -->
            <h6>Billing Information</h6>
            <section>
              <div class="billing-address-content">
              
                <div class="row">
                    
                  <hr>
                  <h3>
                    Personal Information
                  </h3>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" name='first_name'
                  value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->first_name : '' }}" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="validationCustom03">Middle name</label>
                <input type="text" name='middle_name' class="form-control" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->middle_name : '' }}" id="validationCustom03" name='middle_name'
                  value="" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="validationCustom02">Last name</label>
                <input type="text" class="form-control" name='last_name' value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->last_name : '' }}" id="validationCustom02" 
                  value="" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="text" class="form-control" id="email"
                  value="{{auth()->user()->email}}" required  readonly/>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label" for="contact_number">Phone number</label>
                <input type="text" class="form-control" id="contact_number" name='contact_number'
                  value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->contact_number : '' }}" required  />
              </div>
           
            </div>
            <hr>
            <h3>
                Billing Information
              </h3>
            <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="company">Company (optional)</label>
                        <input type="text" class="form-control" id="company" name='company' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->company : '' }}"  />
                      
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="country">Country</label>
                        <input type="text" class="form-control" id="country" name='country' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->country : '' }}" required />
                        <div class="invalid-feedback">
                        Please provide a valid country.
                        </div>
                    </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" class="form-control" id="address" name='address' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->address : '' }}" required />
                    <div class="invalid-feedback">
                      Please provide a valid address.
                    </div>
                  </div>
              <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" name='city' value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->city : '' }}" placeholder="" required />
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="validationCustom04">State</label>
                <input type="text" class="form-control" id="validationCustom04" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->state : '' }}" name='state' placeholder="" required />
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="validationCustom05">Zip Code</label>
                <input type="text" class="form-control" id="validationCustom05" name='zipcode' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->zipcode : '' }}" required />
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
              </div>
            </section>
            <!-- Step 2 -->
            <h6>Cart</h6>
            <section>
              <div class="table-responsive">
                <table class="table align-middle text-nowrap mb-0">
                  <thead class="fs-2">
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th class="text-end">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-3 overflow-hidden">
                          <img src="{{asset('images/icon.png')}}" alt="" class="img-fluid rounded"
                            width="80">
                          <div>
                            <h6 class="fw-semibold fs-4 mb-0">Xtana Subscription</h6>
                            <p class="mb-0">+ $0.75 per execution of the workflow.</p>
                            <a href="javascript:void(0)" class="text-danger fs-4"><i
                                class="ti ti-trash"></i></a>
                          </div>
                        </div>
                      </td>
                      <td class="border-bottom-0">
                        <div class="input-group input-group-sm flex-nowrap rounded">
                          <button
                            class="btn minus min-width-40 py-0 border border-end border-muted border-end-0 text-muted"
                            type="button" id="add1"><i class="ti ti-minus"></i></button>
                          <input type="text"
                            class="min-width-40 flex-grow-0 border border-muted text-muted fs-3 fw-semibold form-control text-center qty"
                            placeholder="" aria-label="Example text with button addon" aria-describedby="add1"
                            value="1">
                          <button
                            class="btn min-width-40 py-0 border border-muted border-start-0 text-muted add"
                            type="button" id="addo2"><i class="ti ti-plus"></i></button>
                        </div>
                      </td>
                      <td class="text-end border-bottom-0">
                        <h6 class="fs-4 fw-semibold mb-0">$300.00</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="order-summary border rounded p-4 my-4">
                <div class="p-3">
                  <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
                  <div class="d-flex justify-content-between mb-4">
                    <p class="mb-0 fs-4">Sub Total</p>
                    <h6 class="mb-0 fs-4 fw-semibold">$300.00</h6>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                    <h6 class="mb-0 fs-5 fw-semibold">$300.00</h6>
                  </div>
                </div>
              </div>
            </section>
         
            <!-- Step 3 -->
            <h6>Payment</h6>
            <section class="payment-method text-center">
              <h5 class="fw-semibold fs-5">Thank you for your purchase!</h5>
              <h6 class="fw-semibold text-primary mb-7">Your order id: 3fa7-69e1-79b4-dbe0d35f5f5d</h6>
              <img src="../assets/images/products/payment.svg" alt="" class="img-fluid mb-4" width="300">
              <p class="mb-0 fs-2">We will send you a notification<br>within 2 days when it ships.</p>
              <div class="d-sm-flex align-items-center justify-content-between my-4">
                {{-- <a href="./eco-checkout.html" class="btn btn-success d-block mb-2 mb-sm-0">Continue Shopping</a> --}}
                <a href="javascript:void(0)" class="btn btn-primary d-block float-right text-right">Download Receipt</a>
              </div>
            </section>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{asset('design/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('design/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('design/assets/js/forms/form-wizard.js')}}"></script>
<script src="{{asset('design/assets/js/apps/ecommerce.js')}}"></script>
@endsection