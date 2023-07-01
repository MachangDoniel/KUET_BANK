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
                  <td colspan="2"><<b style="color: black; font-size:30px;">Customer Service</b></td>
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

    {{-- body part end --}}

    @include('employee.home.script')
  </body>
</html>