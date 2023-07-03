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

        <div class="col-3" style="height: 400px; width: 800px;">
          <table class="table">
            <thead>
            <tr>
              <th>From Account</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Reason</th>
              <th>Date</th>
              <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedback as $data)
                <tr>
                  <td>{{$data->from}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->subject}}</td>
                  <td>{{$data->reason}}</td>
                  <td>{{$data->date}}</td>
                  
                  <td><a class="btn btn-primary" href="{{url('notavailable')}}">Reply</a></td>
                    <!-- Button button -->
                  <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete feedback?')" href="{{url('deletefeedback',$data->id)}}">Delete</a></td>
                </tr>
              
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
