@extends('layouts.header_out')
@section('content')
<!-- /Clients Section -->

<div class="variable-width  ">

  <div class='text-center' > 
    <a class='process' href='#' onclick="vendor_name('Vendor Bill Processing')">
    <img data-lazy="{{asset('xtana/3.png')}}"  title='Vendor Bill Processing' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Vendor Bill Processing</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Client Invoicing')">
      <img data-lazy="{{asset('xtana/4.png')}}"  title='Client Invoicing' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
      <div class='d-flex justify-content-end'>
        {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
        <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
      </div>
      
      <b><strong class='font'>Client Invoicing</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Banking & Reconciliation')">
    <img data-lazy="{{asset('xtana/5.png')}}"  title='Banking & Reconciliation' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Banking & Reconciliation</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Vendor Purchase -  Order Processing')">
    <img data-lazy="{{asset('xtana/6.png')}}"  title='Vendor Purchase -  Order Processing' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Vendor Purchase -  Order Processing</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Cash-Flow Management')">
    <img data-lazy="{{asset('xtana/7.png')}}"  title='Cash-Flow Management' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Cash-Flow Management</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Inventory Control')">
    <img data-lazy="{{asset('xtana/8.png')}}"  title='Inventory Control' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Inventory Control</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Vendor Purchase -  Order Processing')">
    <img data-lazy="{{asset('xtana/9.png')}}"  title='Shipping & Receiving' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Shipping & Receiving</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Payroll Processing')">
    <img data-lazy="{{asset('xtana/10.png')}}"  title='Payroll Processing' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Payroll Processing</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Bill Payments')">
    <img data-lazy="{{asset('xtana/11.png')}}"  title='Bill Payments' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Bill Payments</strong></b>
    </a>
  </div>
  <div class='text-center'> 
    <a class='process' href='#' onclick="vendor_name('Collections')">
    <img data-lazy="{{asset('xtana/12.png')}}"  title='Collections' class="img-fluid filter-rgb  mx-auto d-block" style='width:120px; '>
    <div class='d-flex justify-content-end'>
      {{-- <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
      <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
    </div>
    
    <b><strong class='font'>Collections</strong></b>
    </a>
  </div>
  
</div>
<div class="d-flex">
      <div class="w-100 w-xs-100 chat-container">
        <div class="chat-box-inner-part h-100">
          <div class="chat-not-selected h-100 d-none">
            <div class="d-flex align-items-center justify-content-center h-100 p-5">
              <div class="text-center">
                <span class="text-primary">
                  <i class="ti ti-message-dots fs-10"></i>
                </span>
                <h6 class="mt-2">Open chat from the list</h6>
              </div>
            </div>
          </div>
          <div class="chatting-box d-block">
            <div class="p-9 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
              <div class="hstack gap-3 current-chat-user-name">
                <div class="position-relative">
                  <img src="{{asset('xtana/VIRTUAL_AGENT_ICON.svg')}}" alt="user1" width="48" height="48"
                    class="rounded-circle" />
                  <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <div>
                  <h6 class="mb-1 name fw-semibold"></h6>
                  <p class="mb-0">Virtual Agent <span id='agent_name'></span></p>
                </div>
              </div>
        
            </div>
            
            <div class="d-flex parent-chat-box">
              <div class="chat-box w-xs-100 w-100 " >
                <div class="chat-box-inner p-4 " style='height:200px;background-color:#D3F9D8 ;'  data-simplebar>
                  
                </div>
                
                <div class="px-2 py-6 border-top chat-send-message-footer">
                  
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2 w-85">
                      <a class="position-relative nav-icon-hover z-index-5" href="javascript:void(0)">
                        <img src="{{asset('xtana/MESSENGER_ICON.svg')}}" width="40px" height="50px" >
                        {{-- <i class="ti ti-mood-smile text-dark bg-hover-primary fs-7"></i> --}}
                      </a>
                      <input type="text" class="form-control message-type-box text-muted  p-0 ms-2"
                        placeholder="Type a Message" fdprocessedid="0p3op" />
                    </div>
                    <ul class="list-unstyledn mb-0 d-flex align-items-center">
                      <li>
                        <a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                          href="javascript:void(0)"><i class="ti ti-photo-plus"></i></a>
                      </li>
                      <li>
                        <a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                          href="javascript:void(0)"><i class="ti ti-paperclip"></i></a>
                      </li>
                      <li>
                        <a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                          href="javascript:void(0)"><i class="ti ti-microphone"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="variable-width ">
              <div class='text-center '> 
                <a class='process' href='#' onclick="vendor_name('Quoting & Estimation')">
   
                <img data-lazy="{{asset('images/Xtana icon set_01 - Quoting & Estimation.png')}}"  title='Quoting & Estimation' class="img-fluid renz mx-auto d-block" class='renz text-center' style='width:120px; '>
                
                 
                  
                <div class='d-flex justify-content-end'>
                  <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
                  {{-- <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
                </div>
                <b><strong class='font'>Quoting & Estimation</strong></b>
                </a>
              </div>
              <div class='text-center'> 
                <a class='process' href='#' onclick="vendor_name('Customer Order Processing')">
   
                <img data-lazy="{{asset('images/Xtana icon set_02 - Customer Order Processing.png')}}"  title='Customer Order Processing' class="img-fluid renz mx-auto d-block" class='renz text-center' style='width:120px; '>
                
                 
                  
                <div class='d-flex justify-content-end'>
                  <a href='#'><img src="{{asset('xtana/aa.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a>
                  {{-- <a href='#'><img src="{{asset('xtana/add.png')}}" width="40px" height="40px" class='plus-image text-right move-up '></a> --}}
                </div>
                
                <b><strong class='font'>Customer Order Processing</strong></b>
                </a>
              </div>
             
              
            </div>
          </div>
        </div>
      </div>
</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
        <script>
          function vendor_name(name)
          {
            document.getElementById("agent_name").innerHTML = " - " +name;
          }
        </script>



    @endsection
