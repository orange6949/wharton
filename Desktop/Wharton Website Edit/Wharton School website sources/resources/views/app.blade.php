<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>{{config("app.name")}}</title>
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/aos-2.3.1.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/module.css?v='.\Carbon\Carbon::now()->format("Y-m-d H:i:s")) }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" rel="stylesheet" />
    <link href="{{ asset('css/style.css?v='.\Carbon\Carbon::now()->format("Y-m-d H:i:s")) }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-1.7.1.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js"></script>

    <script src="{{ asset('js/swiper.min.js') }}" defer></script>
    <script src="{{ asset('js/aos-2.3.1.js') }}" defer></script>
    <script src="{{ asset('js/common.js') }}" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
@inertia
</body>
</html>
