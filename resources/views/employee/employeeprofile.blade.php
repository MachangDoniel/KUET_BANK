<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    </style>
    @include('employee.home.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    
    @include('employee.home.sidebar')
    @include('employee.home.navbar')

    {{-- body part start --}}
    
    <div class="container-fluid page-body-wrapper">

      <div class="container" style="margin-top: 50px">
        <div align="center" style="padding: 15px;">
          <table style="height: 400px; width: 800px;">
            <td align="center" style="background: white">
              <table>
                <tr>
                  <td colspan="2"><<b style="color: black; font-size:30px;">Employee Profile</b></td>
                </tr>
              </table>
              <table>
                <tr>
                  <a href="{{url('updateemployeeprofile')}}" class="btn btn-primary" style="float: right">Edit</a>
                </tr>
              </table>
              <table>
                <tr>
                  <td align="center">
                    <img style="height: 200px; border-radius:100%" src="employeeimages/{{$data->image}}" alt="User Image">
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <p style="color:blue; font-size:20px"><b>Employee: <a href="#">KUET BANK</a></b></p>
                  </td>
                </tr>
                <tr>
                  <td>
                  <br>
                    <table style="width: 500px; margin-left:50px">
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Account ID</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$data->uid}}</td>
                      </tr>
                      <tr style="background: skyblue">
                        <th style="padding: 15px; font-size: 15px; color: white;">Name</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$data->name}}</td>
                      </tr>
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Email</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$data->email}}</td>
                      </tr>
                      <tr style="background: skyblue">
                        <th style="padding: 15px; font-size: 15px; color: white;">Phone No</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$data->phone}}</td>
                      </tr>
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Account Status</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$data->status}}</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </table>
        </div>
      </div>
      

    </div>

    {{-- body part end --}}

    @include('employee.home.script')
  </body>
</html>