@extends('frontend.master_layout')
@section('content')

<div class="slider-text card">
    <div class="container mt-2">
        <div class="row">
            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                <div class="row">
                    <h3 style="color: rgb(63, 63, 63);"> Contact Us</h3>
                    <hr>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Subject </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Message </label>

                            <textarea class="form-control" id="exampleFormControlInput1" name="" id="" cols="30" rows="10"></textarea>
                          </div>

                    </div>

                    <div class="col-md-6">
                        <i class="fa fa-clock"></i> Working time: 09:00 AM - 03:00 AM <br><br><br><br>
                        If you have any questions, please contact us. <br><br>
                        Email: support@usd666.com
                    </div>


                    <div class="col-md-6 mb-5">
                        <button type="button" class="btn btn-primary" style="font-size: 22px;"><i class="fa fa-paper-plane"></i> Send Message</button>
                    </div>

                    <div class="col-md-6"></div>



                </div>

    </div>
</div> <!-- slider-text-->

  @endsection
