<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue CRUD Application</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

    <h1>This is a vue component</h1>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="/js/vue-app.js"></script>

</body>
</html>