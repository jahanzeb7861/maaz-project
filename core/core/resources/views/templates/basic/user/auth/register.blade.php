@php
    $registerCaption = getContent('register.content',true);
@endphp
@extends($activeTemplate .'layouts.master')
@section('content')
@include($activeTemplate.'breadcrumb')
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="login-area">
              <h2 class="title mb-3">{{ __($registerCaption->data_values->heading) }}</h2>
              <p>{{ __($registerCaption->data_values->subheading) }}</p>
              <form class="action-form mt-50 loginForm" action="{{ route('user.register') }}" method="post">
                @csrf
                @if($reference)
                <div class="form-group">
                  <label>@lang('Referred By')</label>
                  <input type="text" name="referral" class="form-control" autocomplete="off" autofocus="off" value="{{ $reference }}" readonly>
                </div><!-- form-group end -->
                @endif
                <div class="form-group">
                  <label>@lang('First Name')</label>
                  <input type="text" name="firstname" placeholder="@lang('First Name')" class="form-control" value="{{ old('firstname') }}">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Last Name')</label>
                  <input type="text" name="lastname" placeholder="@lang('Last Name')" class="form-control" value="{{ old('lastname') }}">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Email')</label>
                  <input type="email" name="email" placeholder="@lang('Email')" class="form-control" value="{{ old('email') }}">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Mobile')</label>
                  <input type="text" name="mobile" placeholder="@lang('Mobile')" class="form-control" value="{{ old('mobile') }}">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Username')</label>
                  <input type="text" name="username" placeholder="@lang('Username')" class="form-control" value="{{ old('username') }}">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Password')</label>
                  <input type="password" name="password" placeholder="@lang('Password')" class="form-control">
                </div><!-- form-group end -->
                <div class="form-group">
                  <label>@lang('Re-type Password')</label>
                  <input type="password" name="password_confirmation" placeholder="@lang('Re-type Password')" class="form-control">
                </div><!-- form-group end -->
                <div class="form-group">
                    @php
                      $links = getContent('footer_link.element');
                    @endphp
                    <input type="checkbox" name="terms" required class="mr-2">
                    @lang('I agree with ')@foreach($links as $link)
                    <a href="{{ route('links',[$link->id,slug($link->data_values->title)]) }}"> {{ __($link->data_values->title) }} </a>
                    @if(!$loop->last) , @endif @endforeach
                </div><!-- form-group end -->
                <div class="form-group d-flex justify-content-center">
                  @php echo recaptcha() @endphp
                </div><!-- form-group end -->
                @include('partials.custom-captcha')
                <div class="form-group text-center">
                  <button type="submit" class="cmn-btn rounded-0 w-100">@lang('Register Now')</button>
                  <p class="mt-20">@lang('Already have an account?') <a href="{{ route('user.login') }}">@lang('Login Now')</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@push('script')
    <script>
      (function ($,document) {
            "use strict";
            $('.loginForm').on('submit',function(){

              var response = grecaptcha.getResponse();
              if(response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Captcha field is required.</span>';
                return false;
              }
              return true;
            });

              function verifyCaptcha() {
                  document.getElementById('g-recaptcha-error').innerHTML = '';
              }


              $('select[name=country]').val("{{ old('country') }}");
        })(jQuery,document);
    </script>
@endpush
