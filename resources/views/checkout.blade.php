@extends('layouts.header')
@section('header')
<link rel="stylesheet" href="{{asset('design/assets/libs/sweetalert2/dist/sweetalert2.min.css')}}">
@endsection
@section('content')

<form class="needs-validation" method="POST" action="{{ url('check-out-post') }}" onsubmit="return createToken(event);" enctype="multipart/form-data" id='xtana-form' novalidate>
<div class="checkout">
  <div class="row">
    <div class="col-lg-6">
      <div class="card ">
        <div class="card-body ">
                @csrf
                <div class="row">
                      <h3>
                        Personal Information
                      </h3>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name='first_name'
                      value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->first_name : '' }}" required />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="validationCustom03">Middle name</label>
                    <input type="text" name='middle_name' class="form-control" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->middle_name : '' }}" id="validationCustom03" name='middle_name'
                      value="" required />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" name='last_name' value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->last_name : '' }}" id="validationCustom02" 
                      value="" required />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" id="email"
                      value="{{auth()->user()->email}}" required  readonly/>
                  </div>
                  <div class="col-md-12 mb-3">
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
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="company">Company (optional)</label>
                            <input type="text" class="form-control" id="company" name='company' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->company : '' }}"  />
                          
                        </div>
                        <div class="col-md-12 mb-3">
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
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="validationCustom04">State</label>
                    <input type="text" class="form-control" id="validationCustom04" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->state : '' }}" name='state' placeholder="" required />
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="validationCustom05">Zip Code</label>
                    <input type="text" class="form-control" id="validationCustom05" name='zipcode' placeholder="" value="{{ auth()->check() && auth()->user()->user_profile ? auth()->user()->user_profile->zipcode : '' }}" required />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                </div>
                {{-- <button class="btn btn-primary mt-3 rounded-pill px-4" type="submit">
                  Save Profile
                </button> --}}
            
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card stretch">
        <div class="card-body ">
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
                      </div>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                  1
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
          <div class="row">
            <div class="col-lg-12">
              <div id='card-element' class='form-control'>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-12 text-right mt-5">
            {{-- <button class="btn btn-primary fw-bolder py-6  text-capitalize" data-bs-toggle="modal"
            data-bs-target="#bs-example-modal-lg">Get Now</button> --}}
            <input type='hidden' name='stripeToken' id='stripe-token'>
            <input type='hidden' name='last' id='last'>
            <button class="btn btn-primary fw-bolder py-6  text-capitalize"  type='submit'>Pay Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection
@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{asset('design/assets/libs/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <script src="{{asset('design/assets/js/forms/sweet-alert.init.js')}}"></script>


<script src="https://js.stripe.com/v3/"></script>
<script>
  var stripe = Stripe("{{ env('STRIPE_KEY') }}");
  const appearance = {
      theme: 'stripe',

      variables: {
        colorPrimary: '#0570de',
        colorBackground: '#ffffff',
        colorText: '#30313d',
        colorDanger: '#df1b41',
        fontFamily: 'Ideal Sans, system-ui, sans-serif',
        spacingUnit: '2px',
        borderRadius: '4px',
        // See all possible variables below
      }
    };
  var elements = stripe.elements({ appearance});

  var cardElement = elements.create('card');
  cardElement.mount('#card-element');
  function createToken()
  {
      event.preventDefault();
      stripe.createToken(cardElement).then(function(result){
        if(result.token)
        {
          console.log(result.token);
          document.getElementById('stripe-token').value = result.token.id;
          document.getElementById('last').value = result.token.card.last4;
          document.getElementById('xtana-form').submit();

        }
        else
        {
          error(result.error.message);
        }
    
        
      });
  }

</script>
@endsection