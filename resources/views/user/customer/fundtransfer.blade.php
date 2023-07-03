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
  @include('sweetalert::alert')
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
                        <td><b>Fund Transfer</b></td>
                        <td>
                        </table>
                        <form action="" class="col-9">
                          <div class="form-group" style="width: 400px;">
                            <input style="color:black; background:white;" type="search" name="search" id="" value="{{$search}}" class="form-control" placeholder="Search by Account No" aria-describedby="helpId">
                          </div>
                          <button class="btn btn-primary">Search</button>
                          <a href="{{url('/fundtransfer')}}"><button class="btn btn-primary" type="button" style="background:aqua">Reset</button></a>
                          
                         </form>
                  
                          <div class="col-3" style="height: 400px; width: 400px;">
                            <br>
                               
                                @if(isset($customers) && count($customers) > 0)
                                  @if($customers[0]->uid==$customerdata->uid)
                                  <script>
                                    // JavaScript code to display an alert when the condition is not satisfied
                                    alert('Transaction cant be made with own account');
                                  </script>
                                  @elseif($customers[0]->status != 'active')
                                  <script>
                                    // JavaScript code to display an alert when the condition is not satisfied
                                    alert('The Account No is not active');
                                  </script>
                                  @elseif($customers[0]->usertype == '0')
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th colspan="2" style="font-size:20px">Receiver Info</th>
                                      </tr>
                                      <tr>
                                        <th>Account ID</th>
                                        <th>Name</th>
                                        {{-- <th>Action</th> --}}
                                      </tr>
                                   </thead>
                                   <tbody>
                                    <tr>
                                      <td>{{$customers[0]->uid}}</td>
                                      <td>{{$customers[0]->name}}</td>
                                      {{-- <td>
                                        <a href="#">
                                          <button class="btn btn-primary">Transfer</button>
                                        </a>
                                      </td> --}}
                                    </tr>
                                    </tbody>
                                  </table>
                                  <br><br>
                                  <table class="table">
                                    <tr>
                                      <td>
                                        <form action="{{ route('transfer') }}" method="POST" class="col-9">
                                          @csrf
                                          <div class="form-group" style="width: 400px;">
                                            <input style="color:black; background:white;" type="number" name="transfermoney" id="" class="form-control" placeholder="Enter Amount to Transfer Money" aria-describedby="helpId">
                                          </div>
                                          <input type="hidden" name="sender_id" value="{{ $customerdata->id }}">
                                          <input type="hidden" name="receiver_id" value="{{ $customers[0]->id }}">
                                          <button class="btn btn-primary">Transfer Money</button>
                                        </form>
                                        
                                      </td>
                                    </tr>
                                  </table>
                                  @else
                                  <script>
                                    // JavaScript code to display an alert when the condition is not satisfied
                                    alert('The Account No is not valid');
                                  </script>
                                  @endif
                                @elseif($search!=null)
                                <script>
                                  // JavaScript code to display an alert when the condition is not satisfied
                                  alert('The Account No is not valid');
                                </script>
                                @endif
                              
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