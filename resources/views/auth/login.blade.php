<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- begin::Head -->

<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../../">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('backend/css/demo1/pages/general/login/login-3.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('backend/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('backend/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('backend/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('backend/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('backend/media/logos/favicon.ico') }}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('backend/media//bg/bg-3.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
									<img src="{{ asset('backend/media/logos/logo-5.png') }}">
								</a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In To Admin</h3>
                            </div>
                            <form method="POST" class="kt-form" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="input-group">
                                    <input class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" type="password" placeholder="Password" id="password" name="password">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
												<input type="checkbox" name="remember"> Remember me
												<span></span>
											</label>
                                    </div>
                                    <div class="col kt-align-right">
                                        <a href="{{ route('password.request') }}" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign Up</h3>
                                <div class="kt-login__desc">Enter your details to create your account:</div>
                            </div>
                            <form class="kt-form" action="">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col kt-align-left">
                                        <label class="kt-checkbox">
												<input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
												<span></span>
											</label>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_signup_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                    <button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="kt-form" action="">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                    <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__account">
                            <span class="kt-login__account-msg">
									Don't have an account yet ?
								</span> &nbsp;&nbsp;
                            <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="{{ asset('backend/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{ asset('backend/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{ asset('backend/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('backend/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>
