<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="h-full">
    <div class="flex">
        @include('partials.header')
    </div>
    <div class="pt-20">
        @section('content')@show
    </div>
</div>
</body>
</html>
