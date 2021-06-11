<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    * {
      font-family: inherit;
    }

    .navbar {
      width: 100%;
      height: 92px;
    }

    .containerL {
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="container mt-0 d-flex flex-wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-3">
            <a class="nav-link " href="#">Blog <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Potfoloio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li>
            <img src="./img/shop.jpg" width="36px" height="30px" alt="" style="margin-right:20px;">
          </li>
          <li>
            <img src="./img/login.jpg" id="Link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" width="36px" height="34px" alt="">
            <div class="dropdown-menu" aria-labelledby="Link"
              style="width: 100px;position: absolute;top:90%;left: 85%;">
              <a class="dropdown-item" href="#" style="text-align: center;">Login</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <div class="container-fluid" style="height: 1100px;background-color: rgb(209, 209, 209); padding: 48px 0;">

    <div class="main" style="max-width: 64rem; height:100%; background-color: white;margin:0 auto;border-radius: 10px;">

      <div class="container" style="padding: 40px;">
        <p style="font-size: 30px;font-weight: 600;">購物車</p>
        <div class="row">
          <div class="container progresssss d-flex justify-content-between align-items-center"
            style="height: 72px;padding: 0;">
            <div class="col">
              <div class="first"
                style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%; color: honeydew;">
                1</div>
            </div>
            <div class="col">
              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                2</div>
            </div>
            <div class="col">
              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                3</div>
            </div>
            <div class="col">

              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                4</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col" style="text-align: center;">確認購物車</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">付款與運送方式</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">填寫資料</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">完成訂購</div>
        </div>
        <div class="container" style="padding: 0;">
          <hr>
          <p style="font-size: 24px;">寄送資料</p>
        </div>
        <div class="container" style="padding: 0;">
          <p>
          <h5>姓名</h5><input type="text" name="name" style="width:100%;height:38px"></p>
          <p>
          <h5>電話</h5><input type="text" name="phone" style="width:100%;height:38px"></p>
          <p>
          <h5>Email</h5><input type="text" name="mail" style="width:100%;height:38px"></p>
          <h5>地址</h5>
          <p style="display: flex;flex-wrap: wrap;"><input type="text" style="width:48%;height:38px"><input type="text"
              style="width:48%;height:38px;margin-left:auto;">
            <input type="text" style="width:100%;height:35px;margin-top: 5px;margin-bottom:30px">
          </p>

        </div>



        <hr>
        <div class="container" style="display: flex;flex-direction: column;align-items: flex-end;padding:0;">
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>數量:</span>
            <span>
              <h5>{{ \Cart::getTotalQuantity() }}
            </span>
          </div>

          @php
            $subTotal = \Cart::getSubTotal();
            $shipment = \Cart::getSubTotal() > 1000 ? 0 : 60;
          @endphp

          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>小計:</span>
            <span>
              <h5>${{ number_format($subTotal) }}
            </span>
          </div>
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>運費:</span>
            <span>
              <h5>${{ number_format($shipment) }}
            </span>
          </div>
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>總計:</span>
            <span>
              <h5>${{ number_format($subTotal + $shipment) }}
            </span>
          </div>
        </div>
        <hr>
        <div class="container d-flex" style="padding: 0;">
          <a href="./bootstrap_digipack_shopping_2.html">
            <button class="button-prev" style="width:144px;background-color: rgb(37 , 99, 235);color:white">上一步</button>
          </a>
          <a href="./bootstrap_digipack_shopping_4.html" class="ml-auto">
            <button class="button-next" style="width:144px;background-color: rgb(37 , 99, 235);color:white">前往付款</button>
          </a>
        </div>
      </div>

    </div>

  </div>


  <footer style="width: 100%;height: 60px;background-color: #F3F4F6;display: flex;justify-content: center;">
    <div class="container-fluid"
      style="width: 80%;height: 100%;background-color: #F3F4F6;display: flex;justify-content: space-between;align-items: center;margin: 0;">
      <div class="left">© 2020 Tailblocks — @knyttneve</div>
      <div class="right" style="margin-left: auto;">
        <img src="./img/f.jpg" alt="">
        <img src="./img/t.jpg" alt="">
        <img src="./img/Unknow.jpg" alt="">
        <img src="./img/i.jpg" alt="">
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
</body>

</html>