<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca Digital</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Modern+Antiqua">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="home-wrapper-image">
            <div class="home-wrapper">
                <div class="container">
                    <div class="row justify-content-center align-items-center home-welcome">
                        <div class="col-md-8 welcome-section">
                            <div class="title-area">
                                <h1 class="home-title">BABILON</h1>
                            </div>
                            <hr class="title-subline">
                            <div class="link-area">
                                <a href="{{ route('upload_test') }}" class="home-link">UPLOAD</a>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-7">
                                    <form action="{{ route('results')}}" method="get" class="search-form">
                                        <input type="text" class="form-control home-input" value="{{ request()->input('busqueda') }}" name="busqueda" id="busqueda" placeholder="Search here!">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    </body>
</html>