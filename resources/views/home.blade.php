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
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                      <div class="mb-9 mb-md-0">
                        <h5 class="card-title">Xtana Server</h5>
                        {{-- <p class="card-subtitle mb-0">Reviewd received across all channels</p> --}}
                      </div>
                    </div>
                    <div class="table-responsive overflow-x-auto latest-reviews-table">
                      <table class="table mb-0 align-middle text-nowrap">
                        <thead class="text-dark fs-4">
                          <tr>
                            <th class="ps-0">
                              
                            </th>
                            <th>Server ID</th>
                            <th>Information</th>
                            <th>Reviews</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="ps-0">
                              <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center product text-truncate">
                                <img src="../assets/images/products/product-5.png" class="img-fluid flex-shrink-0"
                                  width="60" height="60">
                                <div class="ms-3 product-title">
                                  <h6 class="fs-4 mb-0 text-truncate-2">iPhone 13 pro max-Pacific Blue-128GB storage</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center text-truncate">
                                <img src="../assets/images/profile/user-2.jpg" alt=""
                                  class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                  <h5 class="mb-1 fs-4">Arlene McCoy</h5>
                                  <h6 class="mb-0 fw-light">macoy@arlene.com</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                        icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                  <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="text-warning"></iconify-icon></a>
                                  </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                  This theme is great. Clean and easy to
                                  understand. Perfect for those who don't have<br>
                                  time to... <a href="#">See more</a>
                                </p>
                              </div>
                            </td>
                            <td>
                              <span
                                class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                            </td>
                            <td>
                              <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                              <div class="dropdown dropstart">
                                <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-plus"></i>Add</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-edit"></i>Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-trash"></i>Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center product text-truncate">
                                <img src="../assets/images/products/product-6.png" class="img-fluid flex-shrink-0"
                                  width="60" height="60">
                                <div class="ms-3 product-title">
                                  <h6 class="fs-4 mb-0 text-truncate-2">Apple MacBook Pro 13 inch-M1-8/256GB-space</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center text-truncate">
                                <img src="../assets/images/profile/user-3.jpg" alt=""
                                  class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                  <h5 class="mb-1 fs-4">Jerome Bell</h5>
                                  <h6 class="mb-0 fw-light">belljerome@yahoo.com</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="text-warning"></iconify-icon></a>
                                  </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                  It's a Mac, after all. Once you've gone Mac,there's no going back. My first Mac
                                  lastedover nine years.
                                </p>
                              </div>
                            </td>
                            <td>
                              <span
                                class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                            </td>
                            <td>
                              <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                              <div class="dropdown dropstart">
                                <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-plus"></i>Add</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-edit"></i>Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-trash"></i>Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center product text-truncate">
                                <img src="../assets/images/products/product-7.png" class="img-fluid flex-shrink-0"
                                  width="60" height="60">
                                <div class="ms-3 product-title">
                                  <h6 class="fs-4 mb-0 text-truncate-2">PlayStation 5 DualSense Wireless Controller</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center text-truncate">
                                <img src="../assets/images/profile/user-4.jpg" alt=""
                                  class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                  <h5 class="mb-1 fs-4">Jacob Jones</h5>
                                  <h6 class="mb-0 fw-light">jones009@hotmail.com</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                        icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                  <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="text-warning"></iconify-icon></a>
                                  </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                  The best experience we could hope for.Customer service team is amazing and thequality
                                  of their products... <a href="#">See more</a>
                                </p>
                              </div>
                            </td>
                            <td>
                              <span
                                class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                            </td>
                            <td>
                              <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                              <div class="dropdown dropstart">
                                <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-plus"></i>Add</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-edit"></i>Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-trash"></i>Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center product text-truncate">
                                <img src="../assets/images/products/product-8.png" class="img-fluid flex-shrink-0"
                                  width="60" height="60">
                                <div class="ms-3 product-title">
                                  <h6 class="fs-4 mb-0 text-truncate-2">Amazon Basics Mesh, Mid-Back, Swivel Office De...
                                  </h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center text-truncate">
                                <img src="../assets/images/profile/user-5.jpg" alt=""
                                  class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                  <h5 class="mb-1 fs-4">Annette Black</h5>
                                  <h6 class="mb-0 fw-light">blackanne@yahoo.com</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                        icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                  <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="text-warning"></iconify-icon></a>
                                  </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                  The controller is quite comfy for me. Despiteits increased size, the controller still
                                  fits well <br>in my hands.
                                </p>
                              </div>
                            </td>
                            <td>
                              <span
                                class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                            </td>
                            <td>
                              <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                              <div class="dropdown dropstart">
                                <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-plus"></i>Add</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-edit"></i>Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-trash"></i>Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center product text-truncate">
                                <img src="../assets/images/products/product-9.png" class="img-fluid flex-shrink-0"
                                  width="60" height="60">
                                <div class="ms-3 product-title">
                                  <h6 class="fs-4 mb-0 text-truncate-2">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...
                                  </h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center text-truncate">
                                <img src="../assets/images/profile/user-6.jpg" alt=""
                                  class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                                <div class="ms-7">
                                  <h5 class="mb-1 fs-4">Albert Flores</h5>
                                  <h6 class="mb-0 fw-light">albertflo9@gmail.com</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="product-reviews">
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                        class="text-warning"></iconify-icon></a></li>
                                  <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                        icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                  <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="text-warning"></iconify-icon></a>
                                  </li>
                                </ul>
                                <p class="text-dark mb-0 fw-normal text-truncate-2">
                                  This theme is great. Perfect for those whodon't have time to start everything from
                                  <br>scratch.
                                </p>
                              </div>
                            </td>
                            <td>
                              <span
                                class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                            </td>
                            <td>
                              <p class="mb-0">Nov 8</p>
                            </td>
                            <td>
                              <div class="dropdown dropstart">
                                <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-plus"></i>Add</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-edit"></i>Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                        class="fs-4 ti ti-trash"></i>Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
