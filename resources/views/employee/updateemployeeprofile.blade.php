<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        
    @include('employee.home.sidebar')
    @include('employee.home.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" style="margin-top: 50px">
            <table>
                <tr>
                  {{-- <td colspan="2"><b style="color: black; font-size:30px;">Edit Profile</b></td> --}}
                </tr>
              </table>
            @if(session()->has('message'))
            <div class='alert alert-success'>
                
                {{session()->get('message')}}
                <button type=button class='close' data-bs-dismiss="alert" style="float: right;">
                    x
                </button>
                
            </div>
            @endif
            <form action="{{url('editemployeeprofile',$employeedata->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div style='padding:15px;'>
                    <label>Name</label>
                    <input type='text' style='color:black;' name='name' value="{{$employeedata->name}}" required>
                </div>

                <div style='padding:15px;'>
                    <label>Email</label>
                    <input type='text' style='color:black;' name='email' value="{{$employeedata->email}}" required>
                </div>

                <div style='padding:15px;'>
                    <label>Phone No</label>
                    <input type='text' style='color:black;' name='phone' value="{{$employeedata->phone}}" required>
                </div>

                <div style='padding:15px;'>
                    <label>Status</label>
                    <input type='text' style='color:black;' name='status' value="{{$employeedata->status}}" required>
                </div>

                <div style='padding:15px;'>
                    <label>Employee Image</label>
                    <img height="100" width="100" src="employeeimages/{{$employeedata->image}}" alt="Image">
                </div>

                <div style='padding:15px;'>
                    <label>Change Image</label>
                    <input type='file' name='file'>
                </div>

                <div style='padding:15px;'>
                    <input type='submit' class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    </div>

    @include('employee.home.script')
    @include('sweetalert::alert')
  </body>
</html>