<!DOCTYPE html>
<html lang="en">
<head>
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

    <div class="container" style="margin-top: 50px">
      <div class="row m-2">
        <form action="" class="col-9">
          <div class="form-group">
            <input style="color:black; background:white" type="search" name="search" id="" value="{{$search}}"
                   class="form-control" placeholder="Search by Account No" aria-describedby="helpId">
          </div>
          <button class="btn btn-primary">Search</button>
          <a href="{{url('customerservice')}}"><button class="btn btn-primary" type="button">Reset</button></a>
        </form>

        <div class="col-3" style="height: 400px; width: 800px;">
          <table class="table">
            <thead>
            <tr>
              <th>Account ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Status</th>
              <th colspan="2">Operation</th>
              <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
              @if($customer->usertype=='0')
                <tr>
                  <td><a href="{{url('customerprofile',$customer->id)}}">{{$customer->uid}}</a></td>
                  <td><a href="{{url('customerprofile',$customer->id)}}">{{$customer->name}}</a></td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->phone}}</td>
                  <td>
                    @if($customer->status=='active')
                      <a href="#"><span class>Active</a>
                    @else
                      <a href="#"><span class>Inactive</a>
                    @endif
                    <!-- Deposit button -->
                  <td><a style="background: green" class="btn btn-primary" href="{{url('deposit',$customer->id)}}">Deposit</a></td>
                    <!-- Update button -->
                  <td><a style="background: aqua" class="btn btn-primary" href="{{url('withdraw',$customer->id)}}">WithDraw</a></td>
                  <td><a class="btn btn-primary" href="{{url('updatecustomer',$customer->id)}}">Update</a></td>
                    <!-- Button button -->
                  <td><a class="btn btn-danger"  onclick="return confirm('Are you sure to remove doctor?')" href="{{url('deletecustomer',$customer->id)}}">Delete</a></td>
                </tr>
              @endif
            @endforeach
            </tbody>
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
