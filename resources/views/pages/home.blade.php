<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/styles.css')}}">
    <title>Encurta!</title>
</head>
<body style="background-color: black">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="{{url('/')}}">
                    TUQ! URL
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 my-5 shortener__container bg-dark" align="center">
                @if (isset($redirect_url))
                    <h3 style="margin: 25% 0 0 0">
                        URL encurtada: 
                        <a href="{{url('/').'/'.$redirect_url}}">
                            {{url('/').'/'.$redirect_url}}
                        </a>
                    </h3>
                @else    
                <h2 style="margin-top: 11%; width:50%">O primeiro e ultimo encurtador de URL's que você vai precisar!</h2>
                <form class="form-inline shortener__form" action="{{url('/short/insert')}}" method="POST">
                    {{csrf_field()}}
                    <div class="input-group mb-3 shortener__input">
                        <input type="text" class="form-control" placeholder="URL" aria-label="URL que você quer encurtar" aria-describedby="basic-addon2" name="urltoshort">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" style="font-size: 20px; font-weight: 700;">Encurta!</button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</body>
</html>