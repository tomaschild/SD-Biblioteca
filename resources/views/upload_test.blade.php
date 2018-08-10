<!DOCTYPE html>
<html>
    <head>
        <title>Upload File | BABILON</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Modern+Antiqua">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="upload-wrapper">
            <div class="">
                <nav class="navbar fixed-top navbar-expand-lg main-menu">
                    <div class="container">
                        <a href="{{ route('test') }}" class="navbar-brand nav-title">BABILON</a>
                        <button class="navbar-toggler" data-toggle="collapse", data-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-item-link">UPLOAD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="">
                <div class="container">
                    <div class="row justify-content-center align-items-center upload-form">
                        <div class="col form-wrapper">
                            <div class="container">
                                <div class="form-title-area">
                                    <h1 class="form-title">Upload File</h1>
                                </div>
                                <form action="/upload" method="post" class="form-content">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="form-row justify-content-center">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="file-title-input" class="form-label">Title</label>
                                                    <input type="text" name="document_title" id="file-title-input" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="file-author-input" class="form-label">Author</label>
                                                    <input type="text" name="document_author" id="file-author-input" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="file-year-input" class="form-label">Year</label>
                                                    <input type="text" name="document_year" id="file-year-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="file-type-input" class="form-label">File Type</label>
                                                    <input type="text" name="document_type" id="file-type-input" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button type="file" class="btn btn-block form-btn" disabled>Choose File</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="upload_document" class="btn btn-block form-btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>