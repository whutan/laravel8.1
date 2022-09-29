@extends('beagle.app')
@section('content')
    <div class="main-content container-fluid">
                <div class="splash-container flex">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header"><img class="logo-img" src="/theme/beagle/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
                        <div class="card-body">
                            <form method="post" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" id="username" type="text" name="email" placeholder="邮箱" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                    <div class="text-danger">*邮箱不能为空</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="密码">
                                    @if($errors->has('password'))
                                        <div class="text-danger">*密码不能为空</div>
                                    @endif
                                </div>
                                <div class="form-group form-inline">
                                    <input class="form-control col-md-6" id="captcha" type="text" name="captcha" placeholder="验证码">
                                    <img src="{{captcha_src()}}" alt="" title="点击切换图片" class="captchaImg col-md-6">
                                    @if($errors->has('captcha'))
                                        <div class="text-danger">*验证码不正确</div>
                                    @endif
                                </div>
                                <div class="form-group row login-tools">
                                    <div class="col-6 login-remember">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="checkbox1" name="remember" value="1">
                                            <label class="custom-control-label" for="checkbox1">记住我</label>
                                        </div>
                                    </div>
                                    <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">Forgot Password?</a></div>
                                </div>
                                <div class="form-group login-submit"><button class="btn btn-primary">登录</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="splash-footer"><span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span></div>
                </div>
            </div>
   
    
@endsection
@section('css')
    <style>
        .captchaImg{
            cursor:pointer;
        }
    </style>
@endsection
@section('js')
    <script>

        let src= $('.captchaImg').attr('src');
        $('.captchaImg').click(function () {

          $(this).attr('src',src+"&"+Math.random())
        });

        @if ($errors->has('email22'))
            window.layer.alert('用户名或密码错误');
        @endif



    </script>
@endsection