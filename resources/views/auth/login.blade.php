{{-- @extends('layouts.app')

@section('content') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Suman') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 <style>
    :root {
        --active-color: rgba(0,0,0,0.65);
        }

        .card-signup {
        border: 1px solid #dadce0;
        border-radius: .5rem;
        }

        .card-signup .card-body {
        padding: 48px 40px 36px;
        }

        .logo {
        width: 75px;
        height: auto;
        margin-bottom: 1rem;
        }

        .slogan {
        color: #3c4043;
        font-weight: 500;
        font-size: .875rem;
        }

        .btn[class*=btn-outline-] {
        border-width: 1px !important;
        box-shadow: none;
        padding-top: .525rem;
        padding-right: 1.4375rem;
        padding-bottom: .525rem;
        padding-left: 1.4375rem;
        font-weight: 500;
        font-size: .785rem;
        border-radius: .25rem;
        }

        .btn.btn-outline-primary {
        border-color: #dadce0 !important; 
        }

        .card-signup .btn.btn-outline-primary:hover {
        background-color: #f6f9fe !important;
        border-color: #d2e3fc !important;
        box-shadow: none !important;
        }

        .card-signup .btn.btn-outline-primary:focus,
        .card-signup .btn.btn-outline-primary:active {
        background-color: #e4eefd !important;
        border-color: #d2e3fc !important;
        box-shadow: none !important;
        }

        .md-form.mat-2 input[type=text],
        .md-form.mat-2 input[type=password],
        .md-form.mat-2 input[type=email] {
        border-width: 1px !important;
        border-style: solid;
        border-color: #ced4da;
        border-radius: 5px;
        padding-top: .5rem;
        padding-left: 8px;
        padding-right: 8px;
        padding-bottom: .3rem;
        font-size: .875rem;
        line-height: 1.5;
        box-sizing: border-box;
        }

        .md-form.mat-2 input[type=text]:focus,
        .md-form.mat-2 input[type=password]:focus,
        .md-form.mat-2 input[type=email]:focus {
        border-color: #4285f4;
        box-shadow: inset 0px 0px 0px 1px #4285f4;
        }

        .md-form.mat-2 label {
        top: .5rem;
        left: 8px;
        font-size: .875rem;
        }

        .md-form.mat-2 label.active {
        background: #fff;
        font-weight: 500;
        padding-right: 5px;
        padding-left: 5px;
        font-size: 11px;
        top: 1rem;
        left: 8px;
        }

        .btn-toggle-pass {
        border: none;
        position: absolute;
        top: 6px;
        background: transparent;
        right: 0;
        }

        .btn-toggle-pass.active {
        color: var(--active-color);
        }
    
 </style>   

</head>
<body><br><br><br>

<div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto my-4">
        <div class="card card-signup z-depth-0">
          <div class="card-body text-center">
            <img src="https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" class="logo" />
            <h3 class="card-title">Sign into your Account</h3>
            <p class="slogan">It's free and anyone can join!</p>
              <form action="" method="post" action="{{ route('login') }}">
                  @csrf
                <div class="md-form mat-2" style="margin-bottom: 10px; font-weight: bold;">
                    <label for="email" style="float:left;">E-mail</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                    
                  <div class="md-form mat-2" style="margin-bottom: 10px; font-weight: bold;">
                    <label for="password" style="float:left;">Password</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  
                  <div class="card-foter text-right">
                      <button type="submit" class="btn btn-outline-primary" style="width: 140px;">Sign in</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    (($) => {

        class Toggle {

        constructor(element, options) {

            this.defaults = {
            icon: 'fa-eye'
            };

            this.options = this.assignOptions(options);

            this.$element = element;
            this.$button = $(`<button class="btn-toggle-pass"><i class="fas ${this.options.icon}"></i></button>`);

            this.init();
        };

        assignOptions(options) {

            return $.extend({}, this.defaults, options);
        }

        init() {

            this._appendButton();
            this.bindEvents();
        }

        _appendButton() {
            this.$element.before(this.$button);
        }

        bindEvents() {

            this.$button.on('click touchstart', this.handleClick.bind(this));
        }

        handleClick() {

            let type = this.$element.attr('type');

            type = type === 'password' ? 'text' : 'password';

            this.$element.attr('type', type);
            this.$button.toggleClass('active');
        }
        }

        $.fn.togglePassword = function (options) {
        return this.each(function () {
            new Toggle($(this), options);
        });
        }

        })(jQuery);

        $(document).ready(function() {
        $('#password').togglePassword();
        $('#password2').togglePassword();
        })

</script>
</body>
</html>

