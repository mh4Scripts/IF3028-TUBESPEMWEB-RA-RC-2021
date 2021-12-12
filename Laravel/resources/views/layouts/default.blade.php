<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <nav>
        <div class="nav">
            <table>
                <tr>
                    <th>
                        <a class="logo" href="index.html"><img src="assets/itera.png" alt="Logo"
                            width="50px">
                        </a>
                    </th>
                    <th>
                        <h1>Lapor</h1>
                    </th>
                </tr>
            </table>
            
            <div class="title">
            </div>
            <div class="navbar">
                <div class="link">
                    <li><a href="/">Home</a></li>
                    <li><a href="">About Us</a></li>
                </div>
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