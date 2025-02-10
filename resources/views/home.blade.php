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
              </div>
            </div>
          </section>
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
