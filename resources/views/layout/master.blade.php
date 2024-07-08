<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
    <style>
        html{
            background-color: #323335;
            color: #DCDDDE;
            font-family: 'Avenir Regular';
            font-size: 20px;
            box-sizing: border-box;
        }

        #crc1{
            width: 1000px;
            height: 1000px;
            background-color: #DE3434;
            border-radius: 250px;
            filter: blur(500px);
            z-index: -1;
            position: fixed;
            right: -950px; bottom: 300px;
        }

        #crc2{
            width: 500px;
            height: 500px;
            background-color: #D9D9D9;
            border-radius: 250px;
            filter: blur(500px);
            z-index: -1;
            position: fixed;
            left: -400px; top: 300px;
        }
    </style>
</head>
<body>
    <div id="crc1"></div>
    <div id="crc2"></div>
    @yield('content')
</body>
</html>