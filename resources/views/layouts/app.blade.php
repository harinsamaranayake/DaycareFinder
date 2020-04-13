<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('inline_css')
    </head>
    <body>
        @include('include.navbar')
        @include('extra.messages')
        @yield('content')
    </body>
</html>

@yield('inline_js')

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>