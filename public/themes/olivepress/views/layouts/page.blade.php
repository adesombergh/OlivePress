<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="@yield('description')">
    <title>Olive Noire</title>

    <!-- Styles -->
    <link rel="manifest" href="/manifest.json">
    <link href="{{ stylesheet_url('assets/styles/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <nav class="links links-left">
                <ul>
                    <li>
                        <a href="#" class="shop">SHOP</a>
                    </li>
                </ul>
            </nav>

            <nav class="links links-right">
                <ul>
                    <li>
                        <a href="{{ home_url('/about') }}" class="about">ABOUT</a>
                    </li>

                    <li>
                        <div class="dropdown is-hoverable is-right">
                            <a class="follow" aria-haspopup="true" aria-controls="dropdown-follow">FOLLOW</a>
                            <div class="dropdown-menu" id="dropdown-follow" role="menu">
                                <ul>
                                    <li><a href="#">newsletter</a></li>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">instagram</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">tinder</a></li>
                                    <li><a href="#">youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="logo">
                <a href="/"><img src="{{ stylesheet_url('assets/images/logo.svg') }}" alt="Logo"></a>
            </div>

            <v-nav inline-template homeurl="{{ home_url() }}">
                <nav class="links links-center">
                    <ul class="main-nav" :class="customClass">
                        <li v-for="link in links" @mouseover="changeClass(link.customClass)" @mouseleave="changeClass('')">
                            <a :href="link.href">#{link.title}</a>
                            <span></span>
                        </li>
                        <span></span>
                    </ul>
                </nav>
            </v-nav>

        </header>

        <main>
            @yield('content')
        </main>

        <footer id="footer">
            <div :style="{ height: footerHeightInPixels }"></div>
            <a href="{{ home_url() }}" id="the-olive" :style="{ fontSize: footerFontSizeInPixels }">OLIVE NOIRE</a>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ stylesheet_url('assets/scripts/app.js') }}"></script>
</body>

</html>
