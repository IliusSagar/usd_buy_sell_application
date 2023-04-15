@extends('frontend.master_layout')
@section('content')

<div class="slider-text">
    <div class="container mt-2">
        <div class="row">
            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                <div class="row">
                    <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="container" style="background-color: rgb(236, 235, 235);">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                        <div style="padding: 25px;">

                            <div>
                                <h2 class="d-inline" style="color: gray;">Sign Up</h2>
                                <div class="d-inline d-flex justify-content-end" style="margin: -25px;">
                                    <p class="" ><i class="fa fa-user"></i> Already a Member?</p>
                                <a class="" href="{{ url('/log-in')}}" style="text-decoration: none;"> <b>Log In</b></a>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">First Name <code>*</code></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Last Name <code>*</code></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" >
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email <code>*</code></label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password <code>*</code></label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Confirm Password <code>*</code></label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" name="password_confirmation">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone <code>*</code></label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" >
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    I'd like to receive newsletter
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree with the <a href="terms.html" style="text-decoration: none;">Terms and Conditions</a>
                                </label>
                              </div>
                              <br>

                              <div class="">

                                <button type="submit" class="btn btn-primary" style="font-size: 22px;">Sign Up</button>
                              </div>

                        </div>

                        </form>

                    </div>
                </div>
                <div class="col-md-3"></div>
                </div>

    </div>
</div> <!-- slider-text-->

  @endsection


