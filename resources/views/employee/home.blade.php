<!DOCTYPE html>
<html lang="en">
  <head>
    @include('employee.home.css')
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
  </body>
</html>