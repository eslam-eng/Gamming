@extends('dashboard.custom-app')

@section('class')
    <div style="background: #171f4e">
@endsection

@section('content')
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-45 justify-content-center">
                            <div class="card-sigin mt-5 mt-md-0">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p">
                                        <div class="">
                                            <div class="main-signup-header">
                                                <h2>@lang('app.auth.welcome_back')</h2>
                                                <h6 class="font-weight-semibold mb-4">@lang('app.auth.please_login_to_continue')</h6>
                                                <div class="panel panel-primary">
                                                    @if(session()->has('error'))
                                                        <div class="alert alert-danger">{{session('error')}}</div>
                                                    @endif
                                                    <div class="panel-body tabs-menu-body border-0 p-3">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <form action="{{route('signin')}}" method="post">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <div class="form-group">
                                                                        <label>@lang('app.auth.email_or_phone')</label>
                                                                        <input class="form-control" name="identifier"
                                                                               placeholder="@lang('app.auth.email_or_phone')"
                                                                               type="text">
                                                                        @error('identifier')
                                                                        <div class="text-danger fw-bold">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>@lang('app.auth.password')</label> <input
                                                                            name="password" class="form-control"
                                                                            placeholder="********" type="password">

                                                                        @error('password')
                                                                        <div class="text-danger fw-bold">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <button type="submit"
                                                                            class="btn btn-primary btn-block">@lang('app.auth.sign_in')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="main-signin-footer text-center mt-3">
                                                    <p><a href="{{url('forgot')}}" class="mb-3">Forgot password?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection


