<!-- resources/views/layouts/web.blade.php -->
 
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from seantheme.com/studio/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Aug 2024 10:27:13 GMT -->
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content>
        <meta name="author" content>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/theme'])

        <link href="{{ asset('theme/assets/css/vendor.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/app.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/plugins/lity/dist/lity.min.css') }}" rel="stylesheet">

        asset('theme
    </head>

    
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>

        
        <script data-cfasync="false" src="{{ asset('theme/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="assets/js/vendor.min.js" type="ef76c6e0db526f2a9582f505-text/javascript"></script>
        <script src="{{ asset('theme/assets/js/app.min.js') }}" type="ef76c6e0db526f2a9582f505-text/javascript"></script>


        <script src="{{ asset('theme/code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js') }}" type="ef76c6e0db526f2a9582f505-text/javascript"></script>
        <script src="{{ asset('theme/assets/plugins/lity/dist/lity.min.js') }}" type="ef76c6e0db526f2a9582f505-text/javascript"></script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="ef76c6e0db526f2a9582f505-text/javascript"></script>
        <script type="ef76c6e0db526f2a9582f505-text/javascript">
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-Y3Q0VGQKY3');
            </script>
        <script src="{{ asset('theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="ef76c6e0db526f2a9582f505-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b5133e499725137","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>


    </body>
</html>