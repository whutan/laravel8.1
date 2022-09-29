
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/theme/beagle/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="/theme/beagle/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="/theme/beagle/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="/theme/beagle/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="/theme/beagle/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="/theme/beagle/lib/bootstrap-slider/css/bootstrap-slider.min.css"/>
    <!-- 引入webupload -->
    <link rel="stylesheet" type="text/css" href="/static/webuploader-0.1.5/webuploader.css">
    <link rel="stylesheet" href="/theme/beagle/css/app.css" type="text/css"/>
    @yield('css')
</head>
<body>
 <div>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible wfalert" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message"><strong></strong>{{session()->get('success')}}</div>
        </div>
            @endif
        @section('content')
    @show
   </div>

<script src="/theme/beagle/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="/theme/beagle/js/app.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/select2/js/select2.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/theme/beagle/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script> 
<script src="/theme/beagle/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
<!-- 引入webuploader.js -->
<script src="/static/webuploader-0.1.5/webuploader.js"></script>
{{--layui--}}
<script src="/js/layui/dist/layui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //-initialize the javascript
        App.init();
        App.formElements();


    });
    function logout(item) {
        $(item).next('form').submit()
    }
</script>
@yield('js')
</body>
</html>