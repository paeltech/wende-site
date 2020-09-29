<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Wende Luvinga - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <section class="header uk-container">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#"><img src="{{ URL::asset('img/logo.png') }}" alt="Logo"></a>
            </div>
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="#">Books</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="/audio-books">Audio books</a></li>
                                    <li><a href="/text-books">Text books</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        @yield('content')
        <section class="uk-section" style="padding-top: 0;">
            <div class="uk-container">
                <div class="footer uk-padding">
                    <div uk-grid class="uk-child-width-expand@s">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ URL::asset('img/logo-white.png') }}" alt="Logo white"></a>
                        </div>
                        <div class="copyright uk-padding-top">&copy Wende Luvinga 2020 | Site by <a href="paulmandele.me"><strong>Seed.</strong>life</a></div>
                        <div>
                            <h4>Lets get social</h4>
                            <a href="#" class="uk-margin-right"><span class="uk-padding-right" uk-icon="icon: facebook;"></span> Facebook</a><a href="#" class="uk-margin-right"><span class="uk-padding-right" uk-icon="icon: instagram;"></span> Instagram</a>
                            <a href="#" class="uk-margin-right"><span class="uk-padding-right" uk-icon="icon: twitter;"></span> Twitter</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit-icons.min.js"></script>
    </body>
</html>