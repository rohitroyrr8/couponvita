<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('includes.header')
    @yield('header')
</head>

<body id="body" class="wide-layout">
    <div id="pageWrapper" class="page-wrapper">
        @include('includes.navbar')
        
        @yield('content')
        @include('includes.footer')
    </div>
    @include('includes.script')
</body>

</html>