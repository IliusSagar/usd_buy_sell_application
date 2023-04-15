@extends('frontend.master_layout')
@section('content')

<div class="card" >
    <div class="slider-text">
        <div class="container mt-2">
            <div class="row">
                @include('frontend.layouts.nav_text_slider')

                    </div>

                    <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                    <div class="row d-inline">
                        <h3 style="color: rgb(63, 63, 63);" class="d-inline"><i class="fa fa-comments"></i> Testimonials </h3>

                        <span class="testimonials-count d-inline" style="font-size: 19px; padding: 3px 15px; margin: 3px; position: relative;
  top: -0.5em; color: #328813; border: 1px solid #328813; border-radius: 5px;">1748</span>

                        <hr>
                        <center><h4 style="font-weight: 300;">Here's what some of our clients think about us.</h4></center>
                    </div>

        </div>
    </div> <!-- slider-text-->
</div>
  @endsection


