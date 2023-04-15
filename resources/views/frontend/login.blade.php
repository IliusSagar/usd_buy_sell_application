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

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div style="padding: 25px;">

                            <div>
                                <h2 class="d-inline" style="color: gray;">Log In</h2>

                            </div>
                            <hr>


                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email <code>*</code></label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password <code>*</code></label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                              </div>


                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Remember Me
                                </label>
                              </div>




                              <br>

                              <div class="">

                                <button type="submit" class="btn btn-primary" style="font-size: 22px;">Log In</button>
                              </div>
                              <br>
                              <a href="" style="text-decoration: none;"><b>Forgot your password?</b></a>
                              <br><br>
                              Not a member yet? <a href="{{ url('/sign-up')}}" style="text-decoration: none;">Sign Up</a>

                        </div>

                    </form>

                    </div>
                </div>
                <div class="col-md-3"></div>
                </div>

    </div>
</div> <!-- slider-text-->

  @endsection


