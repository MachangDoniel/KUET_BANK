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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <!-- Pro Banner HTML code goes here -->
      </div>
    
    @include('employee.home.sidebar')
    @include('employee.home.navbar')
   

    
    {{-- body part start --}}
    <div class="container-fluid page-body-wrapper">

        <div class="container" style="margin-top: 50px; margin-left:120px">
            <form action="{{ route('finalwithdraw') }}" method="POST" class="col-9">
                @csrf
                <div class="form-group" style="width: 400px;">
                  <input style="color:black; background:white;" type="number" name="amount" id="" class="form-control" placeholder="Enter Amount to WithDraw" aria-describedby="helpId">
                </div>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <button class="btn btn-primary">Withdraw</button>
              </form>
        </div>
    </div>

    {{-- body part end --}}

    @include('employee.home.script')
    @include('sweetalert::alert')
  </body>
</html>