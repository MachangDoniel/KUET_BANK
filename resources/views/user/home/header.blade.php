<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{url('home')}}" class="logo">
                          <img src="user/assets/images/kblogo.png" alt="logo">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#home" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#about">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="#about">About Us</a></li>
                                  <li><a href="#services">Our Services</a></li>
                                  <li><a href="#communicate">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
                          
                          @if(Route::has('login'))
                                    @auth

                                    <li>
                                        <a class="scroll-to-section" style="background: green; border-radius:10%; margin-right:10px" href="{{url('account')}}">My Workspace</a>
                                    </li>
                                    <x-app-layout>
                                    </x-app-layout>
                                    @else
                                    <li class="scroll-to-section" style="background: lime; border-radius:10%; margin-right:10px">
                                        <a href="{{route('login')}}"><i>Login</i></a>
                                    </li>

                                    <li class="scroll-to-section" style="background: aqua; border-radius:10%; margin-right:10px">
                                        <a href="{{route('register')}}"><i>Register</i></a>
                                    </li>

                                    @endauth
                                    @endif
                                    <li></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>