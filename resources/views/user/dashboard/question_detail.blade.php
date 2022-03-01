@extends('templates.user.dashboard')
@section('contents')
  <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">質問</p>
                  <h5 class="font-weight-bolder">{{ $question->title }}</h5>
                  <p class="mb-5 ">{{ $question->content }}</p>
              
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary border-radius-lg h-100">
                  <img src="{{ asset('soft-ui-dashboard-main/assets/img/shapes/waves-white.svg') }}" class="position-absolute h-100 w-50 top-0 d-none" alt="waves">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <img class="w-100 position-relative z-index-2 pt-4" src="{{ asset('soft-ui-dashboard-main/assets/img/illustrations/rocket-white.png') }}" alt="rocket">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>  
  @forelse ($answers as $answer)
    <div class="row mt-4">
      <div class="col-12 col-xl-12">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <p class="mb-1 pt-2 text-bold">回答</p>
              </div>
              <div class="col-md-4 text-end">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <div class="avatar me-3">
              <img src="{{ asset('soft-ui-dashboard-main/assets/img/kal-visuals-square.jpg') }}" alt="kal" class="border-radius-lg shadow">
            </div>
            <div class="d-flex align-items-start flex-column justify-content-center">
              <h6 class="mb-0 text-sm">{{ $answer->user->name }}さん</h6>
              <p class="mb-0 text-xs">Hi! I need more information..</p>
            </div>
            <hr>
            <p class="mb-5 font-weight-bolder">{{ $answer->content }}</p>
            <hr class="horizontal gray-light my-4">
          </div>
        </div>
      </div>
    </div>
  @empty
  @endforelse

@endsection