<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>KUET BANK</title>

    <!-- Bootstrap core CSS -->
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->


<body>

  @include('sweetalert::alert')
  @include('user.customer.workspace.header')
  <div id="account">
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(user/assets/images/slide-01.jpg)">
    
              <div class="container-fluid page-body-wrapper">

                <div class="container" style="margin-top: 50px">
                  <div align="center" style="padding: 15px;">
                    <table style="height: 400px; width: 800px;">
                      <td align="center" style="background: white">
                        <table>
                          <tr>
                            <td colspan="2"><b style="color: black; font-size:30px;">Transfer Money</b></td>
                          </tr>
                        </table>
                        
                        <div class="card-body">
                          <p class="card-text">
                            <form method="POST">
                                <div class="alert alert-success w-50 mx-auto" style="background: aqua">
                                  <h5>Enter Account Number</h5>
                                  <input type="text" name="otherNo" class="form-control " placeholder="Enter  Account number"; style="color:white"; required>
                                  <button type="submit" name="get" class="btn btn-primary"  style="background: green">Get Account Info</button>
                                </div>
                            </form>
                          </p>
                        </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
      </div>
    </div>
    </div>  
  </body>
</html>