<!-- resources/views/layouts/web.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from seantheme.com/studio/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Aug 2024 10:27:13 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content />
        <meta name="author" content />

        <link href="assets/css/vendor.min.css" rel="stylesheet" />
        <link href="assets/css/app.min.css" rel="stylesheet" />

        <link href="assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
    </head>

    <body>
        <div id="app" class="app">@yield('content')</div>
    </body>
</html>