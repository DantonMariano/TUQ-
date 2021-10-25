<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EP47WTVKE2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EP47WTVKE2');
  </script>
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
    <div id="app"></div>
    <script src="{{mix('js/app.js')}}"></script>
</body>

</html>
