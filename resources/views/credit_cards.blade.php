@extends('layouts.header')

@section('content')
<div class="checkout">
    
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
          <h4 class="fw-semibold mb-0">Cards</h4>
          <nav aria-label="breadcrumb">
            {{-- <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="../dark/index.html">Home</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">Shop</li>
            </ol> --}}
          </nav>
        </div>
      </div>
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <form class="position-relative">
              <input type="text" class="form-control product-search ps-5" id="input-search"
                placeholder="Search Card..." />
              <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
          </div>
          <div
            class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
            <div class="action-btn show-btn">
              <a href="javascript:void(0)"
                class="delete-multiple bg-danger-subtle btn me-2 text-danger d-flex align-items-center ">
                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
              </a>
            </div>
            <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-primary d-flex align-items-center">
              <i class="ti ti-plus text-white me-1 fs-5"></i> Add Card
            </a>
          </div>
        </div>
      </div>
      
      <div class="card card-body">
        <div class="table-responsive">
          <table class="table search-table align-middle text-nowrap">
            
            <tbody></tbody>
          </table>
        </div>
      </div>
</div>
<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
              aria-labelledby="addContactModalTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title">Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="add-contact-box">
                      <div class="add-contact-content">
                        <form id="addContactModalTitle">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3 contact-name">
                                <input type="text" id="c-name" class="form-control" placeholder="Name" />
                                <span class="validation-text text-danger"></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3 contact-email">
                                <input type="text" id="c-email" class="form-control" placeholder="Email" />
                                <span class="validation-text text-danger"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3 contact-occupation">
                                <input type="text" id="c-occupation" class="form-control" placeholder="Occupation" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3 contact-phone">
                                <input type="text" id="c-phone" class="form-control" placeholder="Phone" />
                                <span class="validation-text text-danger"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3 contact-location">
                                <input type="text" id="c-location" class="form-control" placeholder="Location" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="d-flex gap-6 m-0">
                      <button id="btn-add" class="btn btn-success rounded-pill">Add</button>
                      <button id="btn-edit" class="btn btn-success rounded-pill">Save</button>
                      <button class="btn bg-danger-subtle text-danger rounded-pill" data-bs-dismiss="modal"> Discard
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
@endsection
