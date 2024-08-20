<!doctype html>
<html>
<head>
    @include('style')
</head>
<body>
<header>
    <h1>Welcome to Our Website</h1>
</header>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
    @include('components.alert')
</div>
</body>
<x-alert level="info" message="Please try again." />
