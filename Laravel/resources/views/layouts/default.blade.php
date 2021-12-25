<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/itera.png">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/CSS/style.css">
</head>
<body>
    <nav> 
        <div class="nav">
            <table>
                <tr>
                    <th>
                        <a class="logo" href="/"><img src="{{ URL::to('/') }}/assets/itera.png" alt="Logo"
                            width="50px">
                        </a>
                    </th>
                    <th class="title">
                        <h1>Lapor!</h1>
                    </th>
                </tr>
            </table>
            <div class="navbar">
                <ul class="link">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                </ul>
            </div>  
        </div>    
    </nav>
    <div class="container">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>
</body>
</html>