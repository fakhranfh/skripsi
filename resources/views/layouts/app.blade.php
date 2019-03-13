<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mineral Feed</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex- center">
            <div class="content">
            <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="title m-b-md">
                            
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <a class="navbar-brand" href="{{route('index')}}">Mineral Feed</a>
                                    </div>
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{route('formula')}}">Kebutuhan Nutrien</a></li>
                                        <li><a href="{{route('tekhnik')}}">Tekhnik Pengolahan Mineral</a></li>
                                        <li><a href="{{route('jenis_mineral')}}">Jenis Mineral</a></li>
                                        <li><a href="{{route('sumber_mineral')}}">Sumber Mineral</a></li>
                                        <li><a href="{{route('totalpremix')}}">Komposisi Premix</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                @yield('content')
                
            </div>
        </div>
    </body>
</html>


