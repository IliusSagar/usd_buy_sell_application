@extends('frontend.master_layout')
@section('content')

<div class="slider-text">
    <div class="container mt-2">
        <div class="row">
            @include('frontend.layouts.nav_text_slider')

                </div>

                <!-- <div class="d-none d-sm-block">hide on lg and wider screens</div> -->

                <div class="row">
                    <h3 style="color: rgb(63, 63, 63);"><i class="fa fa-question"></i> Help</h3>
                    <hr>
                    <p>If you need any help, please contact support.</p>
                </div>

    </div>
</div> <!-- slider-text-->

  @endsection


