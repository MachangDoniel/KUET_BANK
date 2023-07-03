<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('home')}}"><img src="user/assets/images/kblogo.png" alt="logo" style="height:80px"/></a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('home')}}"><img src="user/assets/images/kbminilogo.png" alt="logo" style="width:200px;"/></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <a href="{{url('employeeprofile')}}"><img class="img-xs rounded-circle " src="employeeimages/{{$employeedata->image}}" alt=""></a>
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h3><a href="{{url('employeeprofile')}}">{{$employeedata->name}}</a></h3>
              <span>Employee</span>
            </div>
          </div>
          <a href="{{url('notavailable')}}" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('home')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Home</span>
        </a>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('employeeprofile')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Profile</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('customerservice')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Customer Service</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showfeedback')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Feedback</span>
        </a>
      </li>
    </ul>
  </nav>