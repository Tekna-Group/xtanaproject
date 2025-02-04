@extends('layouts.header')

@section('content')
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 col-lg-6">
                      <span class="fw-bolder text-uppercase fs-2 d-block mb-7"><h3 >App Level</h3></span>
                  
                      <h2 class="fw-bolder fs-12 mb-3">$300.00/Monthly</h2>
                      <h6>Plus $0.75 per execution of the workflow.</h6>
                      <ul class="list-unstyled mb-7">
                        <li class="d-flex align-items-center gap-2 py-2">
                          {{-- <i class="ti ti-check text-primary fs-4"></i> --}}
                          <span class="text-dark">Pre-designed workflows ready to use, with minor client-specific adjustments.</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 py-2">
                          {{-- <i class="ti ti-check text-primary fs-4"></i> --}}
                          <span class="text-dark">IDEAL FOR: Clients seeking solutions with minimal set-up.</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                      <span class="fw-bolder text-uppercase fs-2 d-block mb-7"><h3 >Key Features:</h3></span>
                  
                      <ul class="list-unstyled mb-7">
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">Access to individual applications selected from Xtana's App Store equivalent.</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">Pre-designed standard workflows that are functional and ready to use.</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">Client-specific configuration of these workflows (minor adjustments, not deep customization).</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-lg-6">
                    {{-- <button class="btn btn-primary fw-bolder py-6  text-capitalize" data-bs-toggle="modal"
                    data-bs-target="#bs-example-modal-lg">Get Now</button> --}}
                    <a href='{{url("checkout")}}'><button class="btn btn-primary fw-bolder py-6  text-capitalize" >Get Now</button></a>
                    </div>
                  </div>
            </div>
       
          </div>

          <div class="modal fade" id="bs-example-modal-lg" tabindex="-1"
          aria-labelledby="bs-example-modal-lg" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myLargeModalLabel">
                  Check Out
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" method="POST" action="{{ url('edit-profile') }}" novalidate>
                  @csrf
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
                  <div class="form-group">
                    <div class="form-check mr-sm-2">
                      <input type="checkbox" class="form-check-input" id="invalidcheck1" required />
                      <label class="form-check-label" for="invalidcheck1">Agree to terms and conditions</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary mt-3 rounded-pill px-4" type="submit">
                    Pay
                  </button>
                  <button type="button" class="btn bg-danger-subtle text-danger mt-3 px-4 waves-effect text-start"
                  data-bs-dismiss="modal">
                  Cancel
                </button>
                </form>
              </div>
              <div class="modal-footer">
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endsection
