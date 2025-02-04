@extends('layouts.header')

@section('content')


  <div class="position-relative overflow-hidden mt-5">
    <div class="position-relative overflow-hidden rounded-3">
      {{-- <img src="{{asset('design/assets/images/backgrounds/profilebg-2.jpg')}}" alt="" class="w-100"> --}}
    </div>
    <div class="card mx-9 ">
      <div class="card-body pb-0">
        <div class="d-md-flex align-items-center justify-content-between text-center text-md-start">
          <div class="d-md-flex align-items-center">
            <div class="rounded-circle position-relative mb-9 mb-md-0 d-inline-block">
              <img src="{{asset('design/assets/images/profile/user-1.jpg')}}" alt="" class="img-fluid rounded-circle"
                width="100" height="100">
              <span
                class="text-bg-primary rounded-circle text-white d-flex align-items-center justify-content-center position-absolute bottom-0 end-0 p-1 border border-2 border-white"><i
                  class="ti ti-plus"></i></span>
            </div>
            <div class="ms-0 ms-md-3 mb-9 mb-md-0">
              <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-1">
                <h4 class="me-7 mb-0 fs-7">{{auth()->user()->name}}</h4>
                <span
                  class="badge fs-2 fw-bold rounded-pill bg-primary-subtle text-primary border-primary border">Admin</span>
              </div>
              <p class="fs-4 mb-1">{{auth()->user()->email}}</p>
              <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <span class="bg-success p-1 rounded-circle"></span>
                <h6 class="mb-0 ms-2">Active</h6>
              </div>
            </div>
          </div>
          {{-- <a href="#" class="btn btn-primary px-3 shadow-none">Edit Profile</a> --}}
        </div>
        <ul class="nav nav-pills user-profile-tab mt-4 justify-content-center justify-content-md-start"
          id="pills-tab" role="tablist">
          <li class="nav-item me-2 me-md-3" role="presentation">
            <button
              class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent py-6"
              id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
              role="tab" aria-controls="pills-profile" aria-selected="true">
              <i class="ti ti-user-circle me-0 me-md-6  fs-6"></i>
              <span class="d-none d-md-block">Information</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="tab-content mx-10 container" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
      aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-body ">
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
                      Save Profile
                    </button>
                  </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab"
      tabindex="0">
      <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
        <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Followers <span
            class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
        <form class="position-relative">
          <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
            placeholder="Search Followers">
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
        </form>
      </div>
      <div class="row">
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Betty Adams</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Sint
                  Maarten</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Virginia Wong</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Tunisia</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Birdie Burgess</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Algeria</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Steven Lindsey</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Malaysia</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Hannah Rhodes</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Grenada</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-7.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Effie Gross</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Azerbaijan</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-8.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Mark Barton</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>French Southern Territories</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-9.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Carolyn Knight</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Nauru</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-10.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Elizabeth Malone</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Djibouti</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Jon Cohen</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>United States</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Mary Hernandez</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Equatorial Guinea</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Willie Peterson</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Solomon Islands</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Harvey Baldwin</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Uruguay</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Alice George</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Madagascar</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-7.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Beulah Simpson</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Bahrain</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-8.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Francis Barber</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Colombia</span>
              </div>
              <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-9.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Christian Morales</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Maldives</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-10.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Laura Nelson</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>St.
                  Helena</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Blanche Strickland</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>South Africa</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
        <div class=" col-md-6 col-xl-4">
          <div class="card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
                height="40">
              <div>
                <h5 class="fw-semibold mb-0">Adam Washington</h5>
                <span class="fs-2 d-flex align-items-center"><i
                    class="ti ti-map-pin text-dark fs-3 me-1"></i>Suriname</span>
              </div>
              <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab"
      tabindex="0">
      <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
        <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Friends <span
            class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
        <form class="position-relative">
          <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
            placeholder="Search Friends">
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
        </form>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Betty Adams</h5>
              <span class="text-dark fs-2">Medical Secretary</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Inez Lyons</h5>
              <span class="text-dark fs-2">Medical Technician</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Lydia Bryan</h5>
              <span class="text-dark fs-2">Preschool Teacher</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Carolyn Bryant</h5>
              <span class="text-dark fs-2">Legal Secretary</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Paul Benson</h5>
              <span class="text-dark fs-2">Safety Engineer</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-7.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Robert Francis</h5>
              <span class="text-dark fs-2">Nursing Administrator</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-8.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Billy Rogers</h5>
              <span class="text-dark fs-2">Legal Secretary</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-9.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Rosetta Brewer</h5>
              <span class="text-dark fs-2">Comptroller</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-10.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Patrick Knight</h5>
              <span class="text-dark fs-2">Retail Store Manager</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Francis Sutton</h5>
              <span class="text-dark fs-2">Astronomer</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Bernice Henry</h5>
              <span class="text-dark fs-2">Security Consultant</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Estella Garcia</h5>
              <span class="text-dark fs-2">Lead Software Test Engineer</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Norman Moran</h5>
              <span class="text-dark fs-2">Engineer Technician</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Jessie Matthews</h5>
              <span class="text-dark fs-2">Lead Software Engineer</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-7.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Elijah Perez</h5>
              <span class="text-dark fs-2">Special Education Teacher</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-8.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Robert Martin</h5>
              <span class="text-dark fs-2">Transportation Manager</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-9.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Elva Wong</h5>
              <span class="text-dark fs-2">Logistics Manager</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-10.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Edith Taylor</h5>
              <span class="text-dark fs-2">Union Representative</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Violet Jackson</h5>
              <span class="text-dark fs-2">Agricultural Inspector</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card hover-img overflow-hidden">
            <div class="card-body p-4 text-center border-bottom">
              <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
                width="80" height="80">
              <h5 class="fw-semibold mb-0">Phoebe Owens</h5>
              <span class="text-dark fs-2">Safety Engineer</span>
            </div>
            <ul
              class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
              <li class="position-relative">
                <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                  href="javascript:void(0)">
                  <i class="ti ti-brand-facebook"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-instagram"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-github"></i>
                </a>
              </li>
              <li class="position-relative">
                <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                  href="javascript:void(0)">
                  <i class="ti ti-brand-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab"
      tabindex="0">
      <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
        <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Gallery <span
            class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">12</span></h3>
        <form class="position-relative">
          <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
            placeholder="Search Friends">
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
        </form>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s1.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Isuava wakceajo fe.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo fe.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s2.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Ip docmowe vemremrif.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Ip docmowe vemremrif.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s3.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Duan cosudos utaku.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Duan cosudos utaku.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s4.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Fu netbuv oggu.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Fu netbuv oggu.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s5.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Di sekog do.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Di sekog do.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s6.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Lo jogu camhiisi.jpg</h6>
                  <span class="text-dark fs-2">Thu, Dec 15, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Lo jogu camhiisi.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s7.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Orewac huosazud robuf.jpg</h6>
                  <span class="text-dark fs-2">Fri, Dec 16, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Orewac huosazud robuf.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s8.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Nira biolaizo tuzi.jpg</h6>
                  <span class="text-dark fs-2">Sat, Dec 17, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Nira biolaizo tuzi.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s9.jpg" alt="" height="220" class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Peri metu ejvu.jpg</h6>
                  <span class="text-dark fs-2">Sun, Dec 18, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Peri metu ejvu.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s10.jpg" alt="" height="220"
                class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Vurnohot tajraje isusufuj.jpg</h6>
                  <span class="text-dark fs-2">Mon, Dec 19, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Vurnohot tajraje isusufuj.jpg</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s11.jpg" alt="" height="220"
                class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Juc oz ma.jpg</h6>
                  <span class="text-dark fs-2">Tue, Dec 20, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Juc oz ma.jpg</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card hover-img overflow-hidden rounded-2">
            <div class="card-body p-0">
              <img src="../assets/images/products/s12.jpg" alt="" height="220"
                class="w-100 object-fit-cover">
              <div class="p-4 d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-semibold mb-0 fs-4">Povipvez marjelliz zuuva.jpg</h6>
                  <span class="text-dark fs-2">Wed, Dec 21, 2024</span>
                </div>
                <div class="dropdown">
                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu overflow-hidden">
                    <li><a class="dropdown-item" href="javascript:void(0)">Povipvez marjelliz zuuva.jpg</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
<script src="{{asset('design//assets/js/plugins/bootstrap-validation-init.js')}}"></script>
@endsection
