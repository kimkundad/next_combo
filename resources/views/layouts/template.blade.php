<!-- headers-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> @yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('img/favicon-32x32.png') }}" />

    <meta property="og:url"           content="" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="" />
    <meta property="og:image"         content="" />
    <meta property="og:description"   content="" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="314" />
    
    @include('layouts.inc-style')
    @yield('stylesheet')

</head>

<body class="layout-row">


        @yield('content')


    

    <!-- JavaScripts -->
    @include('layouts.inc-script')
    @yield('scripts')

    
</body>

</html>