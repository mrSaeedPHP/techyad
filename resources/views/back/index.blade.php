<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/css/shared/style.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{url('/back/assets/images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{url('front/chosen/chosen.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{url('front/chosen/chosen.jquery.js')}}" type="text/javascript"></script>

    <script src="https://cdn.tiny.cloud/1/theaglga8ixe5nzmy1g4rxq9htbyc6ggoxgsfxpxo4yqn43q/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    {{--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                        url : cmsURL,
                        title : 'Filemanager',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no",
                        onMessage: (api, message) => {
                        callback(message.content);
            }
            });
            }
        };

        tinymce.init(editor_config);
    </script>
</head>

<body>
<div class="container-scroller">
    @include('back.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('back.sidebar')
        @yield('content')
    </div>
</div>
<script src="{{url('/back/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{url('/back/assets/js/shared/off-canvas.js')}}"></script>
<script src="{{url('/back/assets/js/shared/misc.js')}}"></script>
<script src="{{url('/back/assets/js/demo_1/dashboard.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sel').chosen();
    });
</script>
</body>

</html>