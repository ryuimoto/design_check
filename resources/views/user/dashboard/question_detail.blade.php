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
                    <p class="mb-5">{{ $question->content }}</p>
                
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="{{ asset('soft-ui-dashboard-main/assets/img/shapes/waves-white.svg') }}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="{{ asset('soft-ui-dashboard-main/assets/img/illustrations/rocket-white.png') }}" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <hr>
              </div>
            </div>
          </div>
        </div>
    </div>   
@endsection