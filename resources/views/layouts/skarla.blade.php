<?php
$skarlaPath   = "layouts.skarla";
$partialsPath = "layouts.skarla.partials";
$navPath      = "layouts.skarla.nav";
?>

<!DOCTYPE html>
<html lang="en">
    <!-- START Head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <!-- Enable responsiveness on mobile devices-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <title>
            SKARLA | Default Fixed 
        </title>

        <!--START Loader -->
        <style>
            #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
        </style>
        <!--END Loader-->

        @include("{$partialsPath}.assets.default-css")
        @include("{$partialsPath}.others.favicon")


        @yield("content")

        <script>
            let ASSET_PATH_BASE = "{{url('/vendor/skarla/assets')}}";
            let BASE_URL = "{{url('/')}}";
        </script>
    </head>
    <!-- END Head -->

    <body class="sidebar-full-height sidebar-fixed ">

        <!-- Bower Libraries Scripts -->
        <script src="{{skarla_assets_url("/vendor/js/lib.min.js")}}"></script>

        <div class="main-wrap">
            <nav class="navigation">                
                @include("{$navPath}.top")
                @include("{$navPath}.dynamic-access-left")
            </nav>

            <div class="content">
                <div class="container">                    
                    @yield("content")
                </div>
            </div>

            @include("{$navPath}.layout-options")            

            @include("{$navPath}.static-right")
            @include("{$skarlaPath}.footer")

        </div>
<!--        <script>
            // Hide loader
            (function () {
                var bodyElement = document.querySelector('body');
                bodyElement.classList.add('loading');

                document.addEventListener('readystatechange', function () {
                    if (document.readyState === 'complete') {
                        var bodyElement = document.querySelector('body');
                        var loaderElement = document.querySelector('#initial-loader');

                        bodyElement.classList.add('loaded');
                        setTimeout(function () {
                            bodyElement.removeChild(loaderElement);
                            bodyElement.classList.remove('loading', 'loaded');
                        }, 200);
                    }
                });
            })();
        </script>-->

        <!-- Bower Libraries Styles -->
        @include("{$partialsPath}.assets.default-js")
    </body>

</html>
