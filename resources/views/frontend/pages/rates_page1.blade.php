@extends('frontend.master_layout')
@section('content')

<style>
    .nav-item {
    letter-spacing: 2px;
  }

  .nav-link::after {
  content: '';
  display: block;
  width: 0;
  height: 3px;
  background: #fff;
  transition: width .7s;
}

.nav-link:hover::after {
  width: 100%;

}

.wantmore{
color: #fff;
text-decoration: none;
}

.wantmore:hover{
color: #5bbc2e;
}
</style>

<div class="slider-text">
    <div class="container mt-2 card">
        <div class="row">

            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                <div class="row">
                    <h3 ><i class="fa fa-area-chart" style="color: #5bbc2e"></i> Exchange Rates</h3>
                    <div id="loading"><br><center><i class="fa fa-spinner fa-spin fa-3x" style="color: #82c91d"></i></center><br></div>

                    <hr>







                    <div class="col-md-12 table-responsive" style="border: none;">
                        <table class="table" id="ltable" style="display: none; border-bottom: 1px solid #EEE;" width="100%" cellpadding="2" cellspacing="3" border="0" align="center" class="table table-nonfluid">
                            <tr>
                                <th width="35%">Currency Send <i class="fa fa-arrow-circle-right"></i></th>
                                <th width="5%">&nbsp;</th>
                                <th width="35%"><i class="fa fa-arrow-circle-left"></i> Currency Receive </th>
                                <th width="20%"><i class="fa fa-bars"></i> Our Reserve	</th>
                                <th width="5%">Want more?</th>
                            </tr>

                            <!-- start Perfect Money USD -->
                            <tr >
                                <td style="background-color: #e5e9e2;" >
                                    <span class="label label-success" style="font-size: 18px; "><img src="https://usdhut.com/images/currencies/PM.png" width="35" height="35" style="border-radius: 50%">  Perfect Money USD</span>
                                </td>
                            </tr>


                                    <tr >

                                        <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Perfect Money USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                                        <td width="5%"></td>
                                        <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">111 BDT  &nbsp;&nbsp;&nbsp;  Local Pay </a></h3> </td>
                                        <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>74749.94 <sup>BDT</sup></h3></a> </td>
                                        <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>

                                    </tr>

                                    <tr>
                                      <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Perfect Money USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                                      <td width="5%"></td>
                                      <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">111 BDT  &nbsp;&nbsp;&nbsp;  Nagad (পার্সোনাল) </a></h3> </td>
                                      <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>76441.55 <sup>BDT</sup></h3></a> </td>
                                      <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                                  </tr>

                                  <tr>
                                    <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Perfect Money USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                                    <td width="5%"></td>
                                    <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">111 BDT  &nbsp;&nbsp;&nbsp;  Rocket (পার্সোনাল)  </a></h3> </td>
                                    <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>80024.92 <sup>BDT</sup></h3></a> </td>
                                    <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                                </tr>

                                <tr>
                                  <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Perfect Money USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                                  <td width="5%"></td>
                                  <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">111 BDT  &nbsp;&nbsp;&nbsp;  Nexus Pay   </a></h3> </td>
                                  <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>0.01 <sup>BDT</sup></h3></a> </td>
                                  <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                              </tr>
                              <!-- end Perfect Money USD -->


                              <!-- start Webmoney USD -->
                              <tr >
                                <td style="background-color: #e5e9e2;" >
                                    <span class="label label-success" style="font-size: 18px; "><img src="https://usdhut.com/images/currencies/WM.png" width="35" height="35" style="border-radius: 50%">  Webmoney USD</span>
                                </td>
                            </tr>

                            <tr>
                              <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Webmoney USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                              <td width="5%"></td>
                              <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">100 BDT  &nbsp;&nbsp;&nbsp;  Local Pay   </a></h3> </td>
                              <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>72307.94 <sup>BDT</sup></h3></a> </td>
                              <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                          </tr>

                          <tr>
                            <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Webmoney USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                            <td width="5%"></td>
                            <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">100 BDT  &nbsp;&nbsp;&nbsp;  Nagad (পার্সোনাল)    </a></h3> </td>
                            <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>76441.55 <sup>BDT</sup></h3></a> </td>
                            <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                        </tr>

                        <tr>
                          <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Webmoney USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                          <td width="5%"></td>
                          <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">100 BDT  &nbsp;&nbsp;&nbsp;  Rocket (পার্সোনাল)    </a></h3> </td>
                          <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>80024.92 <sup>BDT</sup></h3></a> </td>
                          <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                      </tr>

                      <tr>
                        <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"> <a href="#" style="text-decoration: none; color: #000;"> 1 USD &nbsp;&nbsp;&nbsp; Webmoney USD  <i class="fa fa-chevron-right" style="color: #5bbc2e; margin-left: 70px;"></i></a></h3></td>
                        <td width="5%"></td>
                        <td width="35%"><h3 style="font-weight: 400; font-size: 22px;"><a href="#" style="text-decoration: none; color: #000;">100 BDT  &nbsp;&nbsp;&nbsp;  Nexus Pay     </a></h3> </td>
                        <td width="20%"><a href="#"  class="btn" style="background-color: #5bbc2e; color: #fff;"><h3>0.01 <sup>BDT</sup></h3></a> </td>
                        <td width="5%"><p ><a href="#" class="wantmore">want more?</a></p></td>
                    </tr>

                          <!-- end Webmoney USD -->


                        </table>



                    </div> <!-- col-md-12 -->

                </div>

    </div>
</div> <!-- slider-text-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" ></script>


<script type="text/javascript">
  (function($){
  // preloader
    $(window).ready(function(){
     $('#loading').delay(1000).hide();
     $('#ltable').delay(1000).fadeIn(1000);
    })
  }(jQuery));
</script>
  @endsection

