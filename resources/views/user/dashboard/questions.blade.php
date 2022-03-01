@extends('templates.user.dashboard')
@section('contents')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card mb-4">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Q&A</h6>
              </div>
              @php
                $questions_arr = $questions->chunk(4);
              @endphp
              @foreach ($questions_arr as $question_key => $questions)
                <div class="card-body p-3">
                  <div class="row">
                    @foreach ($questions as $question)
                    @php
                    @endphp
                      <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain">
                          <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                              <img src="{{ asset('soft-ui-dashboard-main/assets/img/home-decor-1.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                            </a>
                          </div>
                          <div class="card-body px-1 pb-0">
                            <p class="text-gradient text-dark mb-2 text-sm">{{ $question->answers->count() }} 人が回答</p>
                            <a href="{{ route('user.question_detail',['question' => $question->id]) }}"> 
                              <h5>
                                {{ $question->title }}
                              </h5>
                            </a>
                            <p class="mb-4 text-sm">
                              {{ $question->content }}
                            </p>
                            <div class="d-flex align-items-center justify-content-between">
                              <button type="button" class="btn btn-outline-primary btn-sm mb-0" onclick="location.href='{{ route('user.question_detail',['question' => $question->id])}}'">回答を見る</button>
                              <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                  <img alt="Image placeholder" src="{{ asset('soft-ui-dashboard-main/assets/img/team-1.jpg') }}">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                  <img alt="Image placeholder" src="{{ asset('soft-ui-dashboard-main/assets/img/team-2.jpg') }}">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                  <img alt="Image placeholder" src="{{ asset('soft-ui-dashboard-main/assets/img/team-3.jpg') }}">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                  <img alt="Image placeholder" src="{{ asset('soft-ui-dashboard-main/assets/img/team-4.jpg') }}">
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    @endforeach
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
@endsection