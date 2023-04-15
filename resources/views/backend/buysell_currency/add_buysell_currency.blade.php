@extends('backend.index')

    @section('content')

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Buying Selling Currency</h4>

            <form class="forms-sample" action="{{ route('store.buysell.currencies')}}" method="POST" >
                @csrf

                @php
                $currencies = App\Models\Currency::latest()->get();
            @endphp

                <div class="form-group ">
                    <label class="">Select Currency</label>
                    <div class="">
                      <select class="form-control"  name="currency_id">
                            <option selected disabled>Select currency</option>
                        @foreach($currencies as $currency)
                            <option value="{{ $currency->id }}"> {{ $currency->currency_name }}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>



              <div class="form-group">
                <label for="exampleInputUsername1">Buying Amount</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="buy_amount">
              </div>

              <div class="form-group">
                <label for="exampleInputUsername1">Selling Amount</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="sell_amount">
              </div>






              <button type="submit" class="btn btn-primary mr-2">Submit</button>

            </form>
          </div>
        </div>
      </div>

    @endsection


