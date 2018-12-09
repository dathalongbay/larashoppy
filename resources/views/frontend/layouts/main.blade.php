<html>
<head>
    <title>App Name - @yield('title')</title>
    @include('frontend.partials.head')
</head>
<body>
@include('frontend.partials.header')

@section('sidebar')
    đây là nội dung sidebar của layout main
@show

<div class="container">
    @yield('content')
</div>

@include('frontend.partials.footer')
</body>
</html>