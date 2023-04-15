@extends('backend.index')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Exchange Rates</h4>

        <form class="forms-sample" action="{{ route('store.exchange.rates')}}" method="POST" >
            @csrf

            @php
            $currencies = App\Models\Currency::latest()->get();
        @endphp

            <div class="form-group ">
                <label class="">Select Currency Send</label>
                <div class="">
                  <select class="form-control"  name="currency_id_send">
                        <option selected disabled>Select currency</option>
                    @foreach($currencies as $currency)
                        <option value="{{ $currency->id }}"> {{ $currency->currency_name }}</option>
                    @endforeach

                  </select>
                </div>
              </div>

              <div class="form-group ">
                <label class="">Select Currency Receive</label>
                <div class="">
                  <select class="form-control"  name="currency_id_receive">
                        <option selected disabled>Select currency</option>
                    @foreach($currencies as $currency)
                        <option value="{{ $currency->id }}"> {{ $currency->currency_name }}</option>
                    @endforeach

                  </select>
                </div>
              </div>



          <div class="form-group">
            <label for="exampleInputUsername1">1 USD</label>
            <input type="text" class="form-control" id="exampleInputUsername1" value="1 USD"  name="usd" readonly>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">BDT</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="110"  name="bdt" >
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Our Researve BDT/USD</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Researve BDT/USD"  name="researve" >
          </div>



          <div class="form-group ">
            <label class="">Select USD/BDT</label>
            <div class="">
              <select class="form-control"  name="usdbdt" >
                    <option selected disabled>Select USD/BDT</option>

                    <option >USD</option>
                    <option >BDT</option>


              </select>
            </div>
          </div>


          <button type="submit" class="btn btn-primary mr-2">Submit</button>

        </form>
      </div>
    </div>
  </div>

@endsection


