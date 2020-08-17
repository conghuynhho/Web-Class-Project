<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tich Tech</title>
    <link rel="icon" href="{{URL::to('source/images/title-icon.png')}}" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{URL::to('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/custom/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    body 
    {
        font-size: 15px;
    }

    #wrapper {

        width: 1100px;

        margin-top: 80px;

        text-align: left;
    height: 50%;
}
    .btn
    {
        font-size: 15px !important;
    }
    </style>
    <body>
        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <a href="{{route('trangchu')}}">
                                <img src="{{URL::to('source/images/logo.png')}}" width="130px">
                            </a>
                            <div class="top_bar_content ml-auto">

                                <div class="top_bar_user ">
                                    <!-- <div class="user_icon"><img src="{{URL::to('source/images/user.svg')}}" alt=""></div> -->
                                    @if (Auth::guest())
                                    <div><a href="{{ route('login') }}">Đăng nhập | </a></div>
                                    <div><a href="{{ route('register') }}"> Đăng kí</a></div>
                                    @else
                                    <li class="dropdown"  style="list-style-type: none;">
                                        <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Đăng xuất
                                            </a>

                                            <form id="logout-form" action="{{('logout')}}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            <!-- <div><a href="{{route('dangky')}}">Đăng kí</a></div>
                                <div><a href="{{route('dangnhap')}}">Đăng nhập</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </header>
    <div class="container" id="wrapper">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:#0869ad; font-size: 18px"><i>ĐĂNG NHẬP</i></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ đăng nhập
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng nhập
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Quên mật khẩu?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

