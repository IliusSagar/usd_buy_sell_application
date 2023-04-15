@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">List of Researve Currencies</h4>
       <div class="d-flex justify-content-end">


        <a href="{{ route('add.researve.currencies') }}" type="submit" class="btn btn-primary " style="margin-bottom: 10px;">Add Researve Currencies</a>
       </div>

        <div class="table-responsive">
          <table class="table table-hover" id="myTable" >
            <thead>
              <tr>
                <th>id</th>
                <th>Image</th>
                <th>Currency Name</th>
                <th>Amount</th>
                <th>USD/BDT</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

                @foreach($researve_currencies as $currency)
                <tr>
                  <td>{{ $currency->id }}</td>
                  <td>

                    <img src="{{asset('upload/'.$currency->img)}}" alt="" style="height: 50px; width: 50px;">
                </td>
                  <td>{{ $currency->currency_name }}</td>
                  <td>{{ $currency->amount }}</td>
                  <td>{{ $currency->usdbdt }}</td>
                  <td>
                      <a href="{{ route('edit.researve.currencies',$currency->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ route('delete.researve.currencies',$currency->id) }}" class="btn btn-danger">Delete</a>
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

