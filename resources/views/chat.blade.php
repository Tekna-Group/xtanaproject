@extends('layouts.header')

@section('content')

<div class="card shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body d-flex align-items-center justify-content-between p-4">
      <h4 class="fw-semibold mb-0">Chat</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-muted text-decoration-none" href="../dark/index.html">Home</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Chat</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="card overflow-hidden chat-application">
    <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
    
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
                  <img src="{{asset('design/assets/images/profile/user-2.jpg')}}" alt="user1" width="48" height="48"
                    class="rounded-circle" />
                  <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <div>
                  <h6 class="mb-1 name fw-semibold"></h6>
                  <p class="mb-0">Virtual Agent</p>
                </div>
              </div>
              <ul class="list-unstyled mb-0 d-flex align-items-center">
                <li>
                  <a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                    href="javascript:void(0)"><i class="ti ti-phone"></i></a>
                </li>
                <li>
                  <a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                    href="javascript:void(0)"><i class="ti ti-video"></i></a>
                </li>
                <li>
                  <a class="chat-menu text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5"
                    href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="d-flex parent-chat-box">
              <div class="chat-box w-xs-100 w-100">
                <div class="chat-box-inner p-9" data-simplebar>
                  
                </div>
                <div class="px-9 py-6 border-top chat-send-message-footer">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2 w-85">
                      <a class="position-relative nav-icon-hover z-index-5" href="javascript:void(0)">
                        <i class="ti ti-mood-smile text-dark bg-hover-primary fs-7"></i></a>
                      <input type="text" class="form-control message-type-box text-muted border-0 p-0 ms-2"
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

          </div>
        </div>
      </div>
      <div class="offcanvas offcanvas-start user-chat-box chat-offcanvas" tabindex="-1" id="chat-sidebar"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            Chats
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="px-4 pt-9 pb-6">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center">
              <div class="position-relative">
                <img src="../assets/images/profile/user-1.jpg" alt="user1" width="54" height="54"
                  class="rounded-circle" />
                <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <div class="ms-3">
                <h6 class="fw-semibold mb-2">Mike Nielsen</h6>
                <p class="mb-0 fs-2">Super Admin</p>
              </div>
            </div>
            <div class="dropdown">
              <a class="text-dark fs-6 nav-icon-hover" href="javascript:void(0)" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 border-bottom"
                    href="javascript:void(0)"><span><i class="ti ti-settings fs-4"></i></span>Setting</a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)"><span><i
                        class="ti ti-help fs-4"></i></span>Help
                    and feadback</a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)"><span><i
                        class="ti ti-layout-board-split fs-4"></i></span>Enable split View mode</a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 border-bottom"
                    href="javascript:void(0)"><span><i class="ti ti-table-shortcut fs-4"></i></span>Keyboard
                    shortcut</a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)"><span><i
                        class="ti ti-login fs-4"></i></span>Sign
                    Out</a>
                </li>
              </ul>
            </div>
          </div>
          <form class="position-relative mb-4">
            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
              placeholder="Search Contact" />
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
          <div class="dropdown">
            <a class="text-muted fw-semibold d-flex align-items-center" href="javascript:void(0)" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Recent Chats<i class="ti ti-chevron-down ms-1 fs-5"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="javascript:void(0)">Sort by time</a>
              </li>
              <li>
                <a class="dropdown-item border-bottom" href="javascript:void(0)">Sort by Unread</a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0)">Hide favourites</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="app-chat">
          <ul class="chat-users mh-n100" data-simplebar>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user bg-light-subtle"
                id="chat_user_1" data-user-id="1">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-2.jpg" alt="user1" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Michell Flintoff
                    </h6>
                    <span class="fs-3 text-truncate text-body-color d-block">You: Yesterdy was great...</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">15 mins</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_2" data-user-id="2">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-3.jpg" alt="user-2" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-danger">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Bianca Anderson
                    </h6>
                    <span class="fs-3 text-truncate text-dark fw-semibold d-block">Nice looking dress
                      you...</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">30 mins</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_3" data-user-id="3">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-4.jpg" alt="user-8" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-warning">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Andrew Johnson
                    </h6>
                    <span class="fs-3 text-truncate text-body-color d-block">Sent a photo</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">2 hrs</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_4" data-user-id="4">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-5.jpg" alt="user-4" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Mark Strokes
                    </h6>
                    <span class="fs-3 text-truncate text-body-color d-block">Lorem ispusm text sud...</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">5 days</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_5" data-user-id="5">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-6.jpg" alt="user1" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Mark, Stoinus & Rishvi..
                    </h6>
                    <span class="fs-3 text-truncate text-dark fw-semibold d-block">Lorem ispusm text ...</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">5 days</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_2" data-user-id="2">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-7.jpg" alt="user-2" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-danger">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Bianca Anderson
                    </h6>
                    <span class="fs-3 text-truncate text-dark fw-semibold d-block">Nice looking dress
                      you...</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">30 mins</p>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)"
                class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                id="chat_user_3" data-user-id="3">
                <div class="d-flex align-items-center">
                  <span class="position-relative">
                    <img src="../assets/images/profile/user-8.jpg" alt="user-8" width="48" height="48"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-warning">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </span>
                  <div class="ms-3 d-inline-block w-75">
                    <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                      Andrew Johnson
                    </h6>
                    <span class="fs-3 text-truncate text-body-color d-block">Sent a photo</span>
                  </div>
                </div>
                <p class="fs-2 mb-0 text-muted">2 hrs</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
@endsection
