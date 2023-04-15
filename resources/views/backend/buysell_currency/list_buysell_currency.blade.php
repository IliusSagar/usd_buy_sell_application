@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">List of Buying Selling Currencies</h4>
       <div class="d-flex justify-content-end">


        <a href="{{ route('add.buysell.currencies') }}" type="submit" class="btn btn-primary " style="margin-bottom: 10px;">Add Buying Selling Currencies</a>
       </div>

        <div class="table-responsive">
          <table class="table table-hover" id="myTable" >
            <thead>
              <tr>
                <th>id</th>
                <th>Image</th>
                <th>Currency Name</th>
                <th>Buying Amount</th>
                <th>Selling Amount</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

                @foreach($buysell_currencies as $buysell)
                <tr>
                  <td>{{ $buysell->id }}</td>
                  <td>

                    <img src="{{asset('upload/'.$buysell->img)}}" alt="" style="height: 50px; width: 50px;">
                </td>
                  <td>{{ $buysell->currency_name }}</td>
                  <td>{{ $buysell->buy_amount }} BDT</td>
                  <td>{{ $buysell->sell_amount }} BDT</td>
                  <td>
                      <a href="{{ route('edit.buysell.currencies',$buysell->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ route('delete.buysell.currencies',$buysell->id) }}" class="btn btn-danger">Delete</a>
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

