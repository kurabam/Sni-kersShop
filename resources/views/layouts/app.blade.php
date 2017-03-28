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
    <link href="/media/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='/media/styles/style.css' rel='stylesheet'/>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
	<script src="/media/js/jquery-3.1.1.min.js"> </script>
    <script src="/media/js/jquery.cookie.js"> </script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <div id="basket">
                    <table>
                        <tbody>
                        <tr style="display: none;" class="hPb">
                            <td>Выбрано:</td>
                            <td><span id="totalGoods">0</span> товаров</td>
                        </tr>
                        <tr style="display: none;" class="hPb">
                            <td>Сумма: &asymp; </td>
                            <td><span id="totalPrice">0</span> руб.</td>
                        </tr>
                        <tr style="display: none;" class="hPb">
                            <td>Куки:</td>
                            <td><span id="gugu">0</span> </td>
                        </tr>
                        <tr style="display: table-row;" class="hPe">
                            <td colspan="2">Корзина пуста</td>
                        </tr>
                        <tr>
                            <td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
                            <td><a style="display: none;" id="checkOut" href="#">Оформить</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
				<a href = "{{asset('feedback')}}" class='navbar-brand'> Условия доставки
				</a>
				<a href = "{{asset('catalog')}}" class='navbar-brand'> Каталог
				</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/media/js/cart.js"> </script>
</body>
</html>
