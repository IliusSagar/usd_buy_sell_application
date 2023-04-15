@extends('backend.index')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Currency</h4>

        <form class="forms-sample" action="{{ route('store.currencies')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group" >


                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="img">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Currency Name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Name" name="currency_name">
          </div>



          <div class="form-group">
            <label for="exampleInputUsername1">1 USD (BDT Rate)</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="1 USD (BDT Rate)" name="bdt_rate">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Pay System</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pay System" name="pay_system">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Currency Reserve (USD)</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Reserve (USD)" name="reserve_usd">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Currency Reserve (BDT)</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Reserve (BDT)" name="reserve_bdt">
          </div>


          <button type="submit" class="btn btn-primary mr-2">Submit</button>

        </form>
      </div>
    </div>
  </div>

@endsection
