<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');


    .navbar {
      box-shadow: 0 3px 15px rgba(255, 255, 255, 0.4);
      height: 100px;
      display: flex;
      align-items: center;
    }

    .navbar-brand {
      margin-left: clamp(8vw, 10vw, 20vw);
      font-size: 2.5rem;
      font-family: 'Bebas Neue', cursive;
      margin-top: 5px;
      margin-bottom: 0;
    }

    html,
    body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .shortener__container {
      height: min-content;
      color: #fff;
      border-radius: 20px;
      box-shadow: 0 3px 30px rgba(255, 255, 255, 0.4);
    }

    .shortener__form {
      margin-top: 70px;
      font-size: 20px;
      height: 100%;
      padding: 0 0 90px 0;
    }

    .shortener__input input {
      font-size: 25px;
      border-radius: 25px 0 0 25px;
      border: 0;
      box-shadow: 0 3px 9px rgba(255, 255, 255, 0.4);
      padding: 10px 20px 10px 30px;
    }

    .shortener__input {
      height: 25px;
      width: 70%;
    }

    .shortener__input button {
      height: 100%;
      border-radius: 0 25px 25px 0;
      box-shadow: 0 3px 9px rgba(255, 255, 255, 0.4);
      padding: 10px 30px 10px 20px;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    a:hover {
      color: #fff;
      text-decoration: none;
      cursor: pointer;
    }

    @media screen and (max-width:768px) {
      .shortener__input button {
        width: min-content;
        font-size: 12px !important;
      }

      .short__url {
        font-size: 12px !important;
      }

      .shortener__input input {
        font-size: 12px;
        width: 90%;
      }
    }

  </style>
  <link rel="stylesheet" href="{{ url('/styles.css') }}">
  <title>Encurta!</title>
</head>

<body style="background-color: black">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="{{ url('/') }}">
          TUQ! URL
        </a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 my-5 shortener__container bg-dark" align="center">
        @if (isset($redirect_url))
          <h3 style="padding: 73px 0 73px 0;" class="short__url">
            URL encurtada:
            <a href="{{ url('/') . '/' . $redirect_url }}">
              {{ "tuqurl.xyz/$redirect_url" }}
            </a>
          </h3>
        @else
          <h2 style="margin-top: 11%; width:50%">O primeiro e ultimo encurtador de URL's que você vai precisar!</h2>
          <form class="form-inline shortener__form" action="{{ url('/short/insert') }}" method="POST">
            {{ csrf_field() }}
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
