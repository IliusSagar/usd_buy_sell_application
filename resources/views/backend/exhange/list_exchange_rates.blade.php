@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">List of Exchange Rate</h4>
       <div class="d-flex justify-content-end">


        <a href="{{ route('add.exchange.rates') }}" type="submit" class="btn btn-primary " style="margin-bottom: 10px;">Add Exchange Rate</a>
       </div>

        <div class="table-responsive">
          <table class="table table-hover" id="myTable" >
            <thead>
              <tr>
                <th>id</th>
                <th>Currency Send</th>
                <th>Currency Receive</th>
                <th>1 USD</th>
                <th>BDT</th>
                <th>Researve Money</th>
                <th>BDT/USD</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach($exchange_rates as $exchange)
                <tr>
                  <td>{{ $exchange->id }}</td>
                  <td>
                    <img src="{{asset('upload/'.$exchange->img_send)}}" alt="" style="height: 50px; width: 50px;">
                    {{ $exchange->currency_name_send }}
                </td>
                <td>
                    <img src="{{asset('upload/'.$exchange->img_receive)}}" alt="" style="height: 50px; width: 50px;">
                    {{ $exchange->currency_name_receive }}
                </td>
                <td>{{ $exchange->usd }}</td>
                <td>{{ $exchange->bdt }} BDT</td>
                <td>{{ $exchange->researve }}</td>
                <td>{{ $exchange->usdbdt }}</td>



                  <td>
                      <a href="{{ route('edit.exchange.rates',$exchange->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ route('delete.exchange.rates',$exchange->id) }}" class="btn btn-danger">Delete</a>
                  </td>

                </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

