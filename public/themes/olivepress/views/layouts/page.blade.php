<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olive Noire</title>

    <!-- Styles -->
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
                        <a href="" class="about">ABOUT</a>
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
                <a href="/"><img src="{{ stylesheet_url('assets/images/logo.svg') }}" alt=""></a>
            </div>
            <nav class="links links-center">
                <ul>
                    <li>
                        <a href="">N<span>E</span>WS</a>
                    </li>
                    <li>
                        <a href=""><span>A</span>RT<span>I</span>STS</a>
                    </li>
                    <li>
                        <a href="">R<span>E</span>L<span>EA</span>S<span>E</span>S</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <a href="/">OLIVE NOIRE</a>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ stylesheet_url('assets/scripts/app.js') }}"></script>
</body>

</html>
