@extends('layouts.header')

@section('content')
          @if(count(auth()->user()->invoices) > 0)
          <section class="welcome">
            <div class="row">
              <div class="col-lg-12 col-xl-6 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body position-relative">
                    <div>
                      <h5 class="mb-1 fw-bold">Welcome {{current(explode(' ',auth()->user()->name))}}</h5>
                      <p class="fs-3 mb-3 pb-1">Next Billing: {{date('M d,Y',strtotime("+1 month",strtotime(auth()->user()->invoices->first()->created_at)))}}</p>
                      <button class="btn btn-primary rounded-pill" type="button">
                        Visit Xtana Server
                      </button>
                    </div>
                    <div class="school-img d-none d-sm-block">
                      <img src="{{asset('design/assets/images/backgrounds/school.png')}}" class="img-fluid" alt="" />
                    </div>

                    <div class="d-sm-none d-block text-center">
                      <img src="{{asset('design/assets/images/backgrounds/school.png')}}" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>


                  <div class="col-sm-4 d-flex align-items-strech">
                    <div class="card info-card overflow-hidden text-bg-primary w-100">
                      <div class="card-body p-4">
                        <div class="mb-7">
                          <i class="ti ti-currency-dollar fs-8 fw-lighter"></i>
                        </div>
                        <h5 class="text-white fw-bold fs-14 text-nowrap">
                          $ 0.00<span class="fs-2 fw-light"></span>
                        </h5>
                        <p class="opacity-50 mb-0">Unpaid Invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
          <div class="card">
            <div class="card-body">
              <div class="d-md-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-4 mb-md-0">Workflows</h5>
                <div class="d-sm-flex align-items-center">
                  <form class="position-relative me-0 me-sm-3 mb-4 mb-sm-0">
                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y ms-3 fs-6"></i>
                  </form>
                  <select class="form-select bg-light fw-bold w-auto shadow-none">
                    <option value="1">Most recent</option>
                    {{-- <option value="2">April 2024</option>
                    <option value="3">May 2024</option>
                    <option value="4">June 2024</option> --}}
                  </select>
                </div>
              </div>
              <div class="border-bottom mt-5">
                <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="product hover-img mb-7">
                      <div class="product-img position-relative rounded-1 mb-6 overflow-hidden">
                        <a href="{{url('/')}}"><img src="{{asset('/images/Logo-Xtana.webp')}}" alt=""
                            class="w-100"></a>
                        <div
                          class="cart-wishlist position-absolute top-0 end-0 d-flex align-items-center gap-6 mt-3 me-3">
                          <a href="javascript:void(0)"
                            class="bg-white rounded-circle d-flex align-items-center justify-content-center text-dark fs-6 p-2"><i
                              class="ti ti-heart"></i></a>
                          <a href="{{url('/')}}"
                            class="bg-white rounded-circle d-flex align-items-center justify-content-center text-dark fs-6 p-2"><i
                              class="ti ti-basket"></i></a>
                        </div>
                      </div>
                      <div>
                        <a href="{{url('/')}}">
                          <h5 class="mb-2">Accounting Workflow</h5>
                        </a>
                        {{-- <div class="d-flex align-items-center mb-2">
                          <i class="ti ti-star-filled text-warning fs-4 me-1"></i>
                          <h6 class="mb-0 me-1">4.8</h6>
                          <p class="mb-0">(87)</p>
                        </div> --}}
                        <h6 class="mb-0 fs-4 mb-3">$16.25 /month </h6>
                        <a href='{{url("/")}}'><button class="btn btn-primary fw-bolder py-6 btn-sm  text-capitalize" >Order Now</button></a> 
                      </div>
                   
                    </div>
                   
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="product hover-img mb-7">
                      <div class="product-img position-relative rounded-1 mb-6 overflow-hidden">
                        <a href="{{url('/')}}"><img src="{{asset('/images/Logo-Xtana.webp')}}" alt=""
                            class="w-100"></a>
                        <div
                          class="cart-wishlist position-absolute top-0 end-0 d-flex align-items-center gap-6 mt-3 me-3">
                          <a href="javascript:void(0)"
                            class="bg-white rounded-circle d-flex align-items-center justify-content-center text-dark fs-6 p-2"><i
                              class="ti ti-heart"></i></a>
                          <a href="{{url('/')}}"
                            class="bg-white rounded-circle d-flex align-items-center justify-content-center text-dark fs-6 p-2"><i
                              class="ti ti-basket"></i></a>
                        </div>
                      </div>
                      <div>
                        <a href="{{url('/')}}">
                          <h5 class="mb-2">HR Workflow</h5>
                        </a>
                        {{-- <div class="d-flex align-items-center mb-2">
                          <i class="ti ti-star-filled text-warning fs-4 me-1"></i>
                          <h6 class="mb-0 me-1">4.8</h6>
                          <p class="mb-0">(87)</p>
                        </div> --}}
                        <h6 class="mb-0 fs-4 mb-3">$16.25 /month </h6>
                        <a href='{{url("/")}}'><button class="btn btn-primary fw-bolder py-6 btn-sm  text-capitalize" >Order Now</button></a> 
                      </div>
                   
                    </div>
                   
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          @else
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
                    <div class="col-sm-12 col-lg-12 text-center">
                    {{-- <button class="btn btn-primary fw-bolder py-6  text-capitalize" data-bs-toggle="modal"
                    data-bs-target="#bs-example-modal-lg">Get Now</button> --}}
                    <a href='{{url("checkout")}}'><button class="btn btn-primary fw-bolder py-6  text-capitalize" >Order Now</button></a>
                    </div>
                  </div>
            </div>
       
          </div>
          @endif

       
@endsection
