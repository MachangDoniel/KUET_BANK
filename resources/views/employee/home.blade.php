<!DOCTYPE html>
<html lang="en">
  <head>
    @include('employee.home.css')
    <style>
      .scrollable-div {
    height: 300px; /* Adjust the height as needed */
    overflow-y: scroll;
  }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <!-- Pro Banner HTML code goes here -->
      </div>
    
    @include('employee.home.sidebar')
    @include('employee.home.navbar')
    @include('employee.home.body')
    @include('employee.home.script')
    @include('sweetalert::alert')
  </body>
</html>