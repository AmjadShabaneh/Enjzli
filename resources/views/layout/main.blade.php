<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @font-face {
            font-family: 'Avenir Light';
            src: url('/Fonts/Avenir/AvenirLight.ttf');
        }

        @font-face {
            font-family: 'Avenir Regular';
            src: url('/Fonts/Avenir/AvenirRegular.ttf'); 
        }

        @font-face {
            font-family: 'Avenir Heavy';
            src: url('../Fonts/Avenir/AvenirHeavy.ttf'); 
        }

        @font-face {
            font-family: 'Avenir Black';
            src: url('/Fonts/Avenir/AvenirBlack.ttf');
        }

        *{
            margin: 0px;
            padding: 0px;
        }
        
        :root{
            --clr-main: 50, 51, 53;
            --clr-second: 74, 75, 77;
            --clr-text: 255, 255, 255;
            --clr-cta: 222, 52, 52;
            --clr-ctaHover: 229, 64, 64;
            --clr-black: 0, 0, 0;
            --clr-shadow: 0, 0, 0, 0.25;
        }

        /* :root{
            --clr-main: #323335;
            --clr-second: #4A4B4D;
            --clr-text: #f3f5f8;
            --clr-cta: #DE3434;
            --clr-ctaHover: #E54040;
            --clr-black: #000000;
        } */

        ::selection {
            color: rgba(var(--clr-main));
            background-color: rgba(var(--clr-ctaHover));
        }
    </style>

    @section('head')
    <link rel="icon" href="path/to/your/favicon.ico" type="image/x-icon">
    @endsection
</head>
<body>
</body>
</html>