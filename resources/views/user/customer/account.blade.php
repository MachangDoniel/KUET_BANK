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

  @include('user.customer.workspace.header')
  <div id="account">
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(user/assets/images/slide-01.jpg)">
    
              <div class="container" style="margin-top:100px">
                <div align="center" style="padding: 15px;" >
                  <table style="height:400px; width:800px;">
                    <td align="center" style="background:white">
                      <table>
                        <td><b>Account Information</b></td>
                        <td>
                        </table>
                        <table style="width:500px;">
                          <tr style="background: black">
                            <th style="padding: 15px; font-size: 15px; color: white;">Account No</th>
                            <td style="padding: 15px; font-size: 15px; color: white;">{{$customerdata->uid}}</td>
                          </tr>
                          <tr style="background: skyblue">
                            <th style="padding: 15px; font-size: 15px; color: white;">Name</th>
                            <td style="padding: 15px; font-size: 15px; color: white;">{{$customerdata->name}}</td>
                          </tr>
                          <tr style="background: black">
                            <th style="padding: 15px; font-size: 15px; color: white;">Email</th>
                            <td style="padding: 15px; font-size: 15px; color: white;">{{$customerdata->email}}</td>
                          </tr>
                          <tr style="background: skyblue">
                            <th style="padding: 15px; font-size: 15px; color: white;">Phone No</th>
                            <td style="padding: 15px; font-size: 15px; color: white;">{{$customerdata->email}}</td>
                          </tr>
                          <tr style="background: black">
                            <th style="padding: 15px; font-size: 15px; color: white;">Status</th>
                            <td style="padding: 15px; font-size: 15px; color: white;">{{$customerdata->status}}</td>
                          </tr>
    
                            {{-- <th style="padding: 15px; font-size: 15px; color: white;">Image</th> --}}
                            {{-- <th style="padding: 15px; font-size: 15px; color: white;">Update</th> --}}
                            {{-- <th style="padding: 15px; font-size: 15px; color: white;">Delete</th> --}}
                        </table>
                        </td>
                      
                    </td>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
      </div>
    </div>
    </div>  
    @include('sweetalert::alert')
  </body>
</html>