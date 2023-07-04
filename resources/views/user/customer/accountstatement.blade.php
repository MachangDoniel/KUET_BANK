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

<style>
  .scrollable-div {
height: 300px; /* Adjust the height as needed */
overflow-y: scroll;
}
</style>
  </head>


<body>

  @include('user.customer.workspace.header')

  <div id="account">
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(user/assets/images/slide-01.jpg)">
    
              <div class="container" style="margin-top:100px">
                <div align="center" style="padding: 15px;" >
                  <table style="width:1000px;">
                    <td align="center" style="background:white">
                      <table>
                        <td><b>History</b></td>
                      </table>
                      <div class="scrollable-div" style="height:500px">
                      <table style="width:1000px;">
                        <thead>
                          <tr style="background:aqua; color:white">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($info as $row)
                            @if($row->from==$customerdata->uid || $row->to==$customerdata->uid)
                            <tr>
                              <td colspan="3">_______________________________________________________________________________________________________________________________________________</td>
                            </tr>
                            <tr style="background:aqua; color:white">
                              <td>{{$row->date}}</td>
                              <td>{{$row->time}}</td>
                              <td>{{$row->message}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                      </table>
                    </div>

                      
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