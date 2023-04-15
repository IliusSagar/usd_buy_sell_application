@extends('frontend.master_layout')
@section('content')
<div class="slider-text">
    <div class="container mt-2">
        <div class="row">

            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                 <!-- start warning message -->
            <div class="container">

              <div class="navbar navbar-expand-lg bg-light ">
                <div class="col-md-6">
                  <h4 style="padding-left: 25px;" class="d-none d-sm-block">Fast Payout in Minutes Between
                  </h4>
                </div>
                <div class="col-md-6">

                  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                       <div class="row ">
                        <div class="col-md-4">
                          <img src="https://usdhut.com/images/currencies/logo_421656109129.png" class="d-none d-sm-block w-20" alt="...">
                        </div>
                        <div class="col-md-4">
                          <img src="https://usdhut.com/images/currencies/logo_771656155382.png" class="d-none d-sm-block w-20" alt="...">
                        </div>
                        <div class="col-md-4">
                          <img src="https://usdhut.com/images/currencies/logo_551659263541.png" class="d-none d-sm-block w-20" alt="...">
                        </div>
                       </div>
                      </div>

                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_761657178883.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_471656156011.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_131663841672.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_641659469998.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_51657179359.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                          <div class="col-md-4">
                            <img src="https://usdhut.com/images/currencies/logo_341663786049.png" class="d-none d-sm-block w-20" alt="...">
                          </div>
                         </div>
                      </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
                  </div>

                </div>
              </div>

              <div class="card mt-2">
                <div class="card-body">
                  <div class="site-warning" style="color: red;">
                    সতর্কতা:- সম্মানিত গ্রাহক, যেই নাম্বার থেকে টাকা পাঠাবেন প্রতিটি অর্ডারের ক্ষেত্রে সেই নাম্বারে কল করে তথ্য যাচাই করা হবে, এবং অবশ্যই আমাদের ওয়েবসাইটে যেই নাম্বার দিয়ে একাউন্ট খুলেছেন সেই নাম্বার দিয়ে লেনদেন করতে হবে। আমাদের ওয়েবসাইটের মাধ্যমে কাউকে ব্লাকমেইল অথবা কারো সাথে প্রতারণা করার চেষ্টা করে আপনার নিজের বিপদ ডেকে আনবেন না।
                  </div>
                </div>
              </div>
            </div>
              <!-- end warning message -->

    </div>
</div> <!-- slider-text-->

<div class="main-container">
    <div class="container mt-2">

            <div class="container">

              <div class="row">
                <div class="col-md-8">

                  <div class="card mt-2">
                    <div class="card-body">
                      <h1 class="home_h1 text-center">Start Exchange</h1>
                      <hr>

                      <div class="row">
                          <div class="col-md-5">
                            <div class="float-end" style="font-size: 22px; ">
                              <i class="fa fa-arrow-up fa-lg " style="color: #8dc6fb;"></i>  SEND

                               <!-- Start Dropdown-1 Animation -->
                              <div>
                                <div class="mm-dropdown" style="cursor: pointer;">
                                  <!-- <div class="textfirst">Select Option<img src="" width="20" height="20" class="down" /> </div>  -->

                                  @php
                                      $currencies = App\Models\Currency::latest()->get();
                                  @endphp

                                  <div class="textfirst" style="width: 250px; height: 40px; font-size: 18px;"><img src="https://usdhut.com/images/currencies/logo_861656108836.png" alt="" width="20" height="20" /> Nagad (পার্সোনাল) BDT</div>

                                  @foreach($currencies as $currency)
                                  <ul >
                                    <li class="input-option" data-value="1" style="font-size: 18px;">
                                      <img src="{{asset('upload/'.$currency->img)}}" alt="" width="20" height="20"  /> {{ $currency->currency_name }}
                                    </li>


                                  </ul>
                              @endforeach


                                  <input type="hidden" class="option" name="namesubmit" value="" />
                                </div>

                              </div> <!-- End Dropdown-1 Animation -->



                            </div>

                          </div> <!-- col-5 -->

                          <div class="col-md-2 " >
                            <center>
                              <i class="fa fa-exchange fa-2x " style="font-size: 28px; margin-top: 43px;"></i>
                            </center>
                          </div>

                          <div class="col-md-5">
                            <div class="float-end" style="font-size: 22px;">
                              RECEIVE <i class="fa fa-arrow-down fa-lg " style="color: #5cb85c;"></i>

                               <!-- Start Dropdown-2 Animation -->
                              <div>
                                <div class="mm-dropdown2" style="cursor: pointer;">
                                  <!-- <div class="textfirst">Select Option<img src="" width="20" height="20" class="down" /> </div>  -->

                                  <div class="textfirst2" style="width: 250px; height: 40px; font-size: 18px; padding: 8px;"><img src="https://usdhut.com/images/currencies/PM.png" alt="" width="20" height="20" /> Perfect Money USD</div>

                                  @foreach($currencies as $currency)
                                  <ul>
                                    <li class="input-option" data-value="1" style="font-size: 18px;">
                                      <img src="{{asset('upload/'.$currency->img)}}" alt="" width="20" height="20"  /> {{ $currency->currency_name }}
                                    </li>


                                  </ul>
                                  @endforeach

                                  <input type="hidden" class="option" name="namesubmit" value="" />
                                </div>

                              </div> <!-- End Dropdown-1 Animation -->



                            </div>

                          </div> <!-- col-5 -->
                      </div>  <!-- end row -->

                      <hr>

                      <center>
                      <a href="" class="btn btn-primary" style="font-size: 28px;"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i> Exchange</a> </center>

                    </div>
                  </div> <!-- card -->

                  <div class="card mt-2">
                    <div class="card-body">
                      <center>
                      <h2 style="color: gray;">Welcome to UsdHut!</h2></center>
                      <h2 style="padding: 8px;">Usd666 ফ্রিল্যান্সারদের জন্য একটি নিরাপদ অনলাইন প্লাটফর্ম। সকল অর্ডার ৫-১৫ মিনিটের মাঝে সম্পূণ করা হয় এবং ওয়েবসাইটটি আপনাদের সেবা প্রদানের জন্যই। নিরাপদে কেনা/বেচা করার জন্য আমাদের সাথেই থাকুন। ধন্যবাদ।</h2>
                    </div>
                  </div> <!-- card -->

                 <h3 class="mt-2"><i class="fa fa-exchange fa-2x " style="font-size: 28px;"></i> Latest Exchanges</h3>

                 <div class="card">
                  <div class="card-body">
                    <table class="table table-striped">
                      <tr>
                        <th width="15%">Order</th>
          <th width="20%">Time</th>
          <!--<th width="7%">User ID</th>-->
          <th width="45%">Direction</th>
          <!-- <th width="30%"><i class="fa fa-user"></i> User</th> -->
          <th width="20%">Status</th>
                      </tr>

                      <tr class="even"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">426073804</td>
                      <td align="center" valign="middle" nowrap="nowrap">4 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_551656107642.png' width='20' height='20' style='border-radius: 50%'>  Coinbasse BTC				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_861656108836.png' width='20' height='20' style='border-radius: 50%'>  Nagad (পার্সোনাল)
                        <br> <b>1</b> <sup> USD</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>112</b> <sup> BDT</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 1  USD = 112  BDT</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">4392</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Imran Wasif -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="odd"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">301045983</td>
                      <td align="center" valign="middle" nowrap="nowrap">5 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_421656109129.png' width='20' height='20' style='border-radius: 50%'>  Tether Usdt (TRC20)				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay
                        <br> <b>129.1</b> <sup> USD</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>14459.2</b> <sup> BDT</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 1  USD = 112  BDT</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">950</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Fahim Reza -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                               <tr class="even"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">534734549</td>
                      <td align="center" valign="middle" nowrap="nowrap">5 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_631602506685.png' width='20' height='20' style='border-radius: 50%'>  TRON (TRX)
                        <br> <b>120</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>1</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 120  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">950</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Fahim Reza -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="odd"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">466178882</td>
                      <td align="center" valign="middle" nowrap="nowrap">6 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_551656107642.png' width='20' height='20' style='border-radius: 50%'>  Coinbasse BTC
                        <br> <b>1230</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>10</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 123  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">868</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Taufequl Islam -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="even"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">210951655</td>
                      <td align="center" valign="middle" nowrap="nowrap">6 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/PM.png' width='20' height='20' style='border-radius: 50%'>  Perfect Money				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_861656108836.png' width='20' height='20' style='border-radius: 50%'>  Nagad (পার্সোনাল)
                        <br> <b>5</b> <sup> USD</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>555</b> <sup> BDT</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 1  USD = 111  BDT</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">4352</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Emon Emon -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="odd"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">482210528</td>
                      <td align="center" valign="middle" nowrap="nowrap">6 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_861656108836.png' width='20' height='20' style='border-radius: 50%'>  Nagad (পার্সোনাল)				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/PM.png' width='20' height='20' style='border-radius: 50%'>  Perfect Money
                        <br> <b>200</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>1.7094</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 117  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">4094</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Mehedi hasan Hemel -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="even"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">354768372</td>
                      <td align="center" valign="middle" nowrap="nowrap">7 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_551656107642.png' width='20' height='20' style='border-radius: 50%'>  Coinbasse BTC
                        <br> <b>1010</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>8.2113</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 123  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">650</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Md sultan Hossain -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="odd"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">632396505</td>
                      <td align="center" valign="middle" nowrap="nowrap">7 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_381659189856.png' width='20' height='20' style='border-radius: 50%'>  Pyypl
                        <br> <b>4801</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>40.0083</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 120  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">4310</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Abdul Malek -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      <tr class="even"  >
                        <td align="center" valign="middle" style="padding-left: 7px;">634102089</td>
                      <td align="center" valign="middle" nowrap="nowrap">7 hours ago</td>

                      <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                        <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                        <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <img src='https://usdhut.com/images/currencies/logo_381659189856.png' width='20' height='20' style='border-radius: 50%'>  Pyypl
                        <br> <b>642</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>5.35</b> <sup> USD</sup> <!-- from account/to account //dev -->
                        <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 120  BDT = 1  USD</span>
                        <br> -->
                      </td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">4310</td>-->
                      <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Abdul Malek -->
                      </td>
                      <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
                      <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
                      <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
                      </tr>

                      tr class="odd"  >
                  <td align="center" valign="middle" style="padding-left: 7px;">655669151</td>
              <td align="center" valign="middle" nowrap="nowrap">8 hours ago</td>

              <td align="center" valign="middle" nowrap="nowrap" style="padding: 15px 8px;">
                  <!--<table width="100%"><tr><td width="40%"></td><td width="5%"></td><td width="48%" align="right"></td></tr></table>-->
                  <img src='https://usdhut.com/images/currencies/logo_21669283666.png' width='20' height='20' style='border-radius: 50%'>  Local Pay				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <img src='https://usdhut.com/images/currencies/PM.png' width='20' height='20' style='border-radius: 50%'>  Perfect Money
                  <br> <b>325</b> <sup> BDT</sup> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <b>2.7777</b> <sup> USD</sup> <!-- from account/to account //dev -->
                  <!-- <br><span class="badge" style="background: #c9c9c9; color: #fff; font-weight: normal;">rate: 117  BDT = 1  USD</span>
                  <br> -->
              </td>
              <!--<td align="center" valign="middle" nowrap="nowrap">1486</td>-->
              <!-- <td align="left" valign="middle" nowrap="nowrap" style="padding: 15px 8px;" font-size: 13px">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> Sukur Alom -->
              </td>
              <td align="center" valign="middle" nowrap="nowrap" style="padding-left: 5px;">
              <span class='badge bg-primary'><i class='fa fa-check'></i> confirmed</span>						</td>
              <!--<td align="center" valign="middle" nowrap="nowrap">IP</td>-->
              </tr>

                    </table>
                  </div>
                 </div>


                </div> <!-- col-md-8 -->

                <div class="col-md-4" >

                  <div class="card mt-2" style="height: 1450px;">
                    <div class="card-body">

                      <h1 style="color: gray;"><i class="fa fa-bars" aria-hidden="true"></i> Our Reserves</h1>

                       @php
                          $researve_currencies = App\Models\ReaserveCurrency::latest()->get();
                      @endphp

                      <table class="table table-striped" >
                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>

                          @foreach($researve_currencies as $currency)
                          <tr>
                            <td width="15%"><img src="{{ 'upload/'.$currency->img }}" width="33" height="33" border="0" style="margin: 3px; border-radius: 50%;" /></td>
                            <td width="50%"><b>{{ $currency->currency_name }}</b></td>
                            <td width="35%"><b>{{ $currency->amount }}</b> <sup>{{ $currency->usdbdt }}</sup></td>
                          </tr>
                          @endforeach



                        </tbody>
                      </table>

                    </div>
                  </div>

                </div> <!-- col-md-4 -->

                <div class="col-md-8">

                </div>

                <div class="col-md-4" style="margin-top: -120px;">

                  <div class="card mt-2" style="height: 850px;">
                    <div class="card-body">

                      <h1 style="color: gray;"> Buy Sell Rates</h1>

                      <table class="table table-striped" >
                        <thead>
                          <tr>
                            <th width="10%" align="center">  </th>
                            <th width="50%" align="center">Gateway</th>
                            <th width="20%" align="center">Buying</th>
                            <th width="20%" align="center">Selling</th>
                          </tr>
                        </thead>
                        <tbody>

                          @php
                              $buysell_currencies = App\Models\BuySellCurrency::latest()->get();
                          @endphp

                      @foreach($buysell_currencies as $buysell)
                          <tr >
                            <td align="center"><img src="{{asset('upload/'.$buysell->img)}}" width="20" height="20" border="0" style="margin: 3px; border-radius: 50%;"></td>
                      <td align="left">{{ $buysell->currency_name }}</td>
                      <td align="center">{{ $buysell->buy_amount }} BDT</td>
                      <td align="center">{{ $buysell->sell_amount }} BDT</td>
                          </tr>
                      @endforeach






                        </tbody>
                      </table>

                    </div>
                  </div>

                </div> <!-- col-md-4 -->

              </div>  <!-- end row -->


            </div>
              <!-- end warning message -->

    </div>
  </div>
  @endsection
