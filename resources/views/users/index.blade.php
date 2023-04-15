@extends('frontend.master_layout')
@section('content')

<style>
    .hover:hover {
       color: #5bbc2e!important;
    }

    .hover {
        color: #000;
    }
</style>

<div class="slider-text card">
    <div class="container mt-2">
        <div class="row">
            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                <div class="row">

                    <div class="d-flex flex-row mb-3" style="background: #e0dddd;">
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-plus " aria-hidden="true"></i> Start Exchange</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-refresh " aria-hidden="true"></i> My Exchanges</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-exchange" aria-hidden="true"></i> Payment History</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-users" aria-hidden="true"></i> My Referrals</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-comments" aria-hidden="true"></i> My Reviews</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-money-bill" aria-hidden="true"></i> Withdraw Money</a></div>
                        <div class="p-2"><a href="#" class="hover" style="text-decoration: none;"><i class="fa fa-edit" aria-hidden="true"></i> Edit Profile</a></div>

                        <div class="p-2"><a href="{{ route('logout') }}" class="hover" style="text-decoration: none;" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                      </div>

                      <h1><!--<i class="fa fa-user-circle"></i>--> My Account</h1>

                      <p>Welcome, <b>{{ Auth::user()->name }}</b>. You are currently signed in, so you can start to make exchanges!</p>

                      <div class="row">
                        <div class="col-md-6">
                            <br>
                            <h2 class="pull-left"><i class="fa fa-refresh fa-spin" style="color: #5bbc2e"></i> Latest 10 Exchanges</h2>
                            <div style="clear: both"></div>
                            <div class="table-responsive">
                                <table align="center" class="btb" width="100%" border="0" cellspacing="0" cellpadding="3">
                                    <tr>
                                        <th width="15%">Date</th>
                                        <th width="15%" nowrap>Reference ID <sup class="itooltip" title="use Reference ID to contact us with any questions">?</sup></th>
                                        <th width="30%" nowrap>Send <i class="fa fa-arrow-right" aria-hidden="true" style="color: #8dc6fb"></i></th>
                                        <th width="30%" nowrap><i class="fa fa-arrow-left" aria-hidden="true" style="color: #5cb85c"></i> Receive</th>
                                        <th width="13%">Status</th>
                                      </tr>

                                      <tr height="30"><td colspan="6" align="center" valign="middle"><br><p>You do not have exchanges at this time.</p></td></tr>
                                </table>
                            </div>
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6 text-center mb-5">
                            <h2 class="text-right"><i class="fa fa-user-circle fa-2x hidden-xs" style="vertical-align: middle; color: #d2e7a8"></i> {{ Auth::user()->name }} Stats</h2>

                            <div class="widget" style="width: 95%; margin-left: 20px; background: #F9F9F9">
                                <div class="row">

                                    <div class="col-md-3 text-center">
                                        <span class="total_balance_" style="font-size: 30px; color: #5bbc2e;"><b>$0.00</b></span><br>
                                                                        <h4 style="margin-top: 10px">Account Balance</h4>

                                        <br><a class="btn btn-primary" href="#"><i class="fa fa-money"></i> withdraw</a>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <a href="#"><span style="font-size: 20px; background: #b3b3b3; color: #000; padding: 8px 15px; margin: 8px 0" class="badge">
                                            0</span></a>
                                        <h4><i class="fa fa-refresh fa-lg"></i> Exchanges</h4>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <a href="#"><span style="font-size: 20px; background: #b3b3b3; color: #000; padding: 8px 15px; margin: 8px 0" class="badge">0</span></a>
                                        <h4><i class="fa fa-comments"></i> Testimonials</h4>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <a href="#"><span style="font-size: 20px; background: #b3b3b3; color: #000; padding: 8px 15px; margin: 8px 0" class="badge">0</span></a>
                                                                    <h4><i class="fa fa-users fa-lg"></i> Referrals</h4>
                                                                </div>

                                </div>
                            </div>
                        </div> <!-- col-md-6 -->



                      </div> <!-- row -->

                      <br><br><br><br>
                      <hr>

                      <div class="row">
                        <div class="col-md-6">



                        </div>

                        <div class="col-md-6">
                            <div class="widget">
                                <h3><i class="fa fa-info-circle"></i> Identity Upload Troubleshooting</h3>
                                <p>If you are having difficulty successfully uploading a passport, driver's license or state ID, please ensure the following:</p>
                                <ul>
                                    <li>You have a webcam and Adobe Flash is enabled in your browser</li>
                                    <li>The document is not expired or considerably damaged</li>
                                    <li>The image is clear and all borders of the document are fully visible</li>
                                    <li>The image is bright and well lit</li>
                                    <li>There is no glare on the document</li>
                                </ul>
                            </div>


                        </div>

                      </div>


                </div>

    </div>
</div> <!-- slider-text-->

  @endsection

