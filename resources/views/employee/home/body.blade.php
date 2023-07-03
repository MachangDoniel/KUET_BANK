<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                {{-- <div class="col-4 col-sm-3 col-xl-2">
                  <img src="employee/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                </div>
                 <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                  <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                </div> 
                <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                  <span>
                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                  </span>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$transactionmethod->transfer}}</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">৳</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Transfer Money</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$transactionmethod->deposit}}</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">৳</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Deposit</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$transactionmethod->withdraw}}</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">৳</p>
                    {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">৳</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Withdraw</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$transactionmethod->total}}</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">৳</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Transaction</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Transaction History</h4>
              {{-- <canvas id="transaction-history"></canvas> --}}
              <img src="/photos/transfer.jpg" alt="GIF Image">

                <div id="text-display"></div>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Transfer via Offline</h6>
                  {{-- <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p> --}}
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">{{ $transactionmethod->deposit + $transactionmethod->withdraw}} Tk</h6>
                </div>
              </div>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Transfer via Online</h6>
                  {{-- <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p> --}}
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">{{$transactionmethod->transfer}} Tk</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card" style="background:black">
          
          <div class="col-md-8 grid-margin stretch-card" style="background: black">
            <div align="center" style="padding: 15px;">
              <table style="width: 800px;">
                <td align="center" style="background: black">
                  <table>
                    <td><b>History</b></td>
                  </table>
                  <div class="scrollable-div">
                    <table style="width: 800px;">
                      <thead>
                        <tr style="background: black; color: white">
                          <th>Date</th>
                          <th>Time</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($info as $row)
                        <tr>
                          <td colspan="3">__________________________________________________________________________________________________________________________</td>
                        </tr>
                        <tr style="background: black; color: white">
                          <td style="font-size: 12px">{{$row->date}}</td>
                          <td style="font-size: 12px">{{$row->time}}</td>
                          <td style="font-size: 12px">{{$row->message}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </td>
              </table>
            </div>
          </div>
          
      </div>
    </div>
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>