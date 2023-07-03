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
        <!-- Pro Banner HTML code goes here -->
      </div>
    
    @include('employee.home.sidebar')
    @include('employee.home.navbar')

    {{-- body part start --}}
    
    <div class="container-fluid page-body-wrapper">

      <div class="container" style="margin-top: 50px; margin-left:120px">
        <div class="center" style="padding: 15px;">
                <a href="{{url('updateemployeeprofile')}}" class="btn btn-primary" align="right">Edit</a>
              </div>
              <table>
                <tr>
                  <td align="center">
                    <img style="height: 200px; border-radius:100%" src="employeeimages/{{$employeedata->image}}" alt="User Image">
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <p style="color:white; font-size:20px"><b>Employee: <a href="#">KUET BANK</a></b></p>
                  </td>
                </tr>
                <tr>
                  <td>
                  <br>
                    <table style="width: 500px; margin-left:50px">
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Account ID</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$employeedata->uid}}</td>
                      </tr>
                      <tr style="background: skyblue">
                        <th style="padding: 15px; font-size: 15px; color: white;">Name</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$employeedata->name}}</td>
                      </tr>
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Email</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$employeedata->email}}</td>
                      </tr>
                      <tr style="background: skyblue">
                        <th style="padding: 15px; font-size: 15px; color: white;">Phone No</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$employeedata->phone}}</td>
                      </tr>
                      <tr style="background: black">
                        <th style="padding: 15px; font-size: 15px; color: white;">Account Status</th>
                        <td style="padding: 15px; font-size: 15px; color: white;">: {{$employeedata->status}}</td>
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
    @include('sweetalert::alert')
  </body>
</html>