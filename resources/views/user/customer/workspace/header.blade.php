<header class="header-area header-sticky" style="background: #212741">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="" class="logo">
                        <img src="user/assets/images/kblogo.png" alt="logo">
                    </a>
                            
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    
                    
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('home')}}">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('account')}}" class="active">Accounts</a></li>
                        <li class="scroll-to-section"><a href="{{url('accountstatement')}}">Account Stastement</a></li>
                        <li class="scroll-to-section"><a href="{{url('fundtransfer')}}">Fund Transfer</a></li>
                        {{-- <li id="balance" class="scroll-to-section" style="background: yellowgreen; border-radius:10%; height:40px; margin-left:10px"><a href="{{url('balance',$customerdata->id)}}">Balance</a></li> --}}
                        <li class="scroll-to-section" style="background: yellowgreen; border-radius:10%; height:40px; margin-left:10px"><a href="{{url('balance')}}">Balance</a></li>
                        @if(Route::has('login'))
                            @auth
                            <x-app-layout>
                            </x-app-layout>
                           
                        @else
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
<script>
    document.getElementById("balance").addEventListener("click", function() {
        alert("Your Current Balance is: "+ {{$customerdata->balance}});
    });

</script>