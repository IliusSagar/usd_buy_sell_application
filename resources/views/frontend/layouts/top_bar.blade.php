<div class="col-md-4">
    <div class="row">
        <div class="logo">
          <!-- <a href="https://usdhut.com/"><img src="https://usdhut.com/images/logo.png" alt="UsdHut"></a> -->
          <h2><a href="{{ url('/')}}" style="text-decoration: none;">Logo</a></h2>
        </div>
      </div>
</div><!-- end col-md-4 -->

<div class="col-md-4">
    <div class="row">

      <!-- <div class="operator_box card-body text-center">
         <i class="fa fa-user-circle-o fa-2x" aria-hidden="true" style="color: #1877f2; vertical-align: middle;"></i> Operator: <span class="label label-success"  style="background-color: #073b4c"><i id="operator_live" class="fa fa-circle" aria-hidden="true" style="color: #8bf24a"></i> online</span> 	          <br>&nbsp;&nbsp; <i class="fa fa-clock-o fa-lg" style="color: #1877f2"></i> Working Time: 09:00 AM - 03:00 AM
       <br>
       <b><i class="fa fa-phone-square fa-lg" aria-hidden="true" style="color: #1877f2"></i> Helpline: +1 (412) 339-0153 (WhatsApp)</b>
         </div> -->



          <div class="card">
            <div class="card-body">
                <center>
                    <h6 class="card-title">
                        <i class="fa fa-user "  style="color: #1877f2; "></i> Operator:
                        <span class="label label-success "  style="background-color: #073b4c; color: white; padding: 4px;">
                          <i id="operator_live" class="fa fa-circle spinner-grow spinner-grow-sm" aria-hidden="true" style="color: #8bf24a; "></i> online
                        </span>
                      </h6>


              <p class="card-text">
                <i class="fa fa-clock" style="color: #1877f2"></i> Working Time: 09:00 AM - 03:00 AM
                <br>
                <b><i class="fa fa-phone" aria-hidden="true" style="color: #1877f2"></i> Helpline: +880 1575 288892 (WhatsApp)</b>

              </p>

            </center>




            </div>
          </div> <!-- end card -->

    </div>

  </div> <!-- end col-md-4 -->

  <div class="col-md-4 ">
    <!-- <div class="">
        <a href="#" class="btn btn-primary"><i class="fa fa-user"></i> Sign Up</a>
        <a href="#" class="btn btn-light"><i class="fa fa-sign-in"></i> Log In</a>


    </div> -->

    <!-- <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <form class="d-flex" role="search">
            <a href="#" class="btn btn-primary"><i class="fa fa-user"></i> Sign Up</a>&nbsp;
            <a href="#" class="btn btn-light"><i class="fa fa-sign-in"></i> Log In</a>
          </form>
        </div>
      </nav> -->

      @if (Route::has('login'))
        @auth

        <div style="font-size: 14px; ">

        <a href="#"><i class="fa fa-user-circle fa-lg" style="color: #000;"></i></a> Welcome, <a href="#" style="text-decoration: none;"><span class="member"><b>{{ Auth::user()->name }}</b></span></a> | Balance: <a href="#" style="text-decoration: none;"><span class="label label-success">$0.00</span></a><span class="hidden-xs"> | <i class="fa fa-users"></i>  Referrals: <a href="#" style="color: #000; text-decoration: none;"><span class="referrals">0</span></a></span><!-- | <a class="logout" href="#">Logout</a>-->

        </div>

        <div class="dropdown " style="margin-top: 10px; margin-left: 180px; ">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: 1px solid #000;">
                <i class="fa fa-user" aria-hidden="true"></i>
              My Account
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="fa fa-plus" aria-hidden="true"></i> Start Exchange</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-refresh" aria-hidden="true"></i> My Exchanges</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Payment History</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-users" aria-hidden="true"></i> My Referrals</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-comments" aria-hidden="true"></i> My Reviews</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-money-bill" aria-hidden="true"></i> Withdraw Money</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit Profile</a></li>
              <hr>
              <li><a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a></li>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            </ul>
          </div>


        @else
            <div class="d-flex justify-content-end">
                <div class="d-inline">
                <a href="{{ url('sign-up')}}" class="btn btn-primary"><i class="fa fa-user"></i> Sign Up</a>&nbsp;
                </div>

                <div class="d-inline card">
                <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-sign-in"></i> Log In</a>
                </div>
            </div>
        @endauth
      @endif

      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Launch demo modal
</button> -->

</div> <!-- end col-md-4 -->
