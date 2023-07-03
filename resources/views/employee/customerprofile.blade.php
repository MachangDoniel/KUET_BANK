<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
  <style type="text/css">
    label {
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

  {{-- Body part start --}}

  <div class="container-fluid page-body-wrapper">

    <div class="container" style="margin-top:100px">
        <div align="center" style="padding: 15px;" >
          <table style="height:400px; width:800px;">
            <tr><td><a style="align:right" class="btn btn-primary" href="{{url('updatecustomer',$data->id)}}">Update</a></td></tr>
            <tr>
            <td align="center" style="background:white">
              <table>
                <td><b style="color:black">Customer Profile</b></td>
                
                </table>
                <table style="width:500px;">
                  <tr style="background: black">
                    <th style="padding: 15px; font-size: 15px; color: white;">Account No</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->uid}}</td>
                  </tr>
                  <tr style="background: skyblue">
                    <th style="padding: 15px; font-size: 15px; color: white;">Name</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->name}}</td>
                  </tr>
                  <tr style="background: black">
                    <th style="padding: 15px; font-size: 15px; color: white;">Email</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->email}}</td>
                  </tr>
                  <tr style="background: skyblue">
                    <th style="padding: 15px; font-size: 15px; color: white;">Phone No</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->email}}</td>
                  </tr>
                  <tr style="background: black">
                    <th style="padding: 15px; font-size: 15px; color: white;">Status</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->status}}</td>
                  </tr>
                  <tr style="background: skyblue">
                    <th style="padding: 15px; font-size: 15px; color: white;">Balance</th>
                    <td style="padding: 15px; font-size: 15px; color: white;">{{$data->balance}} Tk</td>
                  </tr>

                    {{-- <th style="padding: 15px; font-size: 15px; color: white;">Image</th> --}}
                    {{-- <th style="padding: 15px; font-size: 15px; color: white;">Update</th> --}}
                    {{-- <th style="padding: 15px; font-size: 15px; color: white;">Delete</th> --}}
                </table>
                </td>
              
            </td>
            </tr>
          </table>
        </div>
      </div>

    {{-- Body part end --}}

    @include('employee.home.script')
    @include('sweetalert::alert')
  </div>
</div>
</body>
</html>
