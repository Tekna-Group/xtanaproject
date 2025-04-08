@extends('layouts.header_out')
@section('content')
<!-- /Clients Section -->

{{-- <div class="variable-width  "> --}}
    <div class="card w-100">
        <div class="card-body">
          <div class="mb-4">
            <h5 class="mb-0">Upload Information - LLM</h5>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Using Manual Input (Content)
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <form method="POST"  method="POST" action="{{ url('upload') }}" onsubmit="show()"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter document title" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Group</label>
                            <select class="form-control"  class="form-control" id="group" name="group" placeholder="Group" required>
                                <option value=''>Group</option>
                                @foreach($groups as $group)
                                <option value='{{$group->group}}'>{{$group->group}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter document content" required></textarea>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Using Website Link
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <form method="POST"  method="POST" action="{{ url('upload-link') }}" onsubmit="show()"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter document title" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Group</label>
                            <select class="form-control"  class="form-control" id="group" name="group" placeholder="Group" required>
                                <option value=''>Group</option>
                                @foreach($groups as $group)
                                <option value='{{$group->group}}'>{{$group->group}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Link</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Enter website link" required>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false"
                  aria-controls="flush-collapseThree">
                Using PDF File
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <form method="POST"  method="POST" action="{{ url('upload-pdf') }}" onsubmit="show()"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter document title" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Group</label>
                        <select class="form-control"  class="form-control" id="group" name="group" placeholder="Group" required>
                            <option value=''>Group</option>
                            @foreach($groups as $group)
                            <option value='{{$group->group}}'>{{$group->group}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">PDF File</label>
                        <input type="file" class="form-control" id="file" name="pdf" placeholder="Enter website link" accept="application/pdf" required>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
{{-- </div> --}}
@endsection
