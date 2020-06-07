<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/back/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{url('/back/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('/back/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('/back/vendors/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{url('/back/vendors/chartist/chartist.min.css')}}">
    <link rel="stylesheet" href="{{url('/back/css/style.css')}}">
    <link rel="shortcut icon" href="{{url('/back/images/favicon.png')}}"/>

    {{--     link chosen start--}}
    <link rel='stylesheet' href='https://harvesthq.github.io/chosen/chosen.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css'>
    {{--    end link chosen--}}
</head>
<body>
<div class="container-scroller">
    @include('back.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('back.sidbar')
        @yield('content')
    </div>
</div>

<script src="{{url('/back/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{url('/back/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{url('/back/vendors/moment/moment.min.js')}}"></script>
<script src="{{url('/back/vendors/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('/back/vendors/chartist/chartist.min.js')}}"></script>
<script src="{{url('/back/js/off-canvas.js')}}"></script>
<script src="{{url('/back/js/misc.js')}}"></script>
<script src="{{url('/back/js/dashboard.js')}}"></script>


{{--script chosen--}}
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='http://harvesthq.github.io/chosen/chosen.jquery.js'></script>
<script>
    document.getElementById('output').innerHTML = location.search;
    $(".chosen-select").chosen();
</script>
{{--end script chosen--}}

{{--  install link tiny mce4--}}
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
{{--  scripti editor tinymc4--}}

{{--start script tiny mc4--}}
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute: "/",
        selector: "textarea#editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
    }
</script>
{{--end code script tiny mc4--}}


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
    }
</script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
</body>
</html>


