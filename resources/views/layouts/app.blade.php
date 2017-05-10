<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/semantic/semantic.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/semantic/components/dropdown.css" rel="stylesheet">
    <link href="/semantic/components/menu.css" rel="stylesheet">
    <link href="/css/railscasts.css" rel="stylesheet">
    {{-- <link href="/css/zenburn.css" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('layouts.navbar')
    @include('partial.analytics')

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <div class="" style="padding-left: 10px; padding-right: 10px;">
        <div class="ui fluid container">
            <div class="ui grid">
                <div class="twelve wide column">
                    @yield('content')
                </div>
                <div class="four wide column">
                    <div class="ui segment">
                        <h3 class="ui dividing header">
                              Leitura Recomendada
                        </h3>
                        <div class="ui list">
                            <div class="item">
                                <i class="angle double right icon"></i>
                                <div class="content">
                                    <a href="https://laravel.com/docs/5.4/releases" target="_blank">Laravel 5.4 Release Notes <i class="external small icon"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <i class="angle double right icon"></i>
                                <div class="content">
                                    <a href="http://coffeescript.org/#overview" target="_blank">Já viu CoffeScript? <i class="external small icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui segment">
                        <h3 class="ui dividing header">Informações</h3>
                        <div class="ui list">
                            <div class="item">
                                <i class="angle double right icon"></i>
                                <div class="content">
                                    Em breve estarei disponibilizando comentários nas postagens
                                </div>
                            </div>
                            <div class="item">
                                <i class="angle double right icon"></i>
                                <div class="content">
                                    <a href="/about">Saiba mais sobre o blog</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="ui segment">
                        <img class="ui fluid image" src="img/image.png">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/semantic/semantic.js"></script>
    <script src="/semantic/components/dropdown.js"></script>
    <!-- Syntax Highlighter -->
    <script src="/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
