@extends('backend.index')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edits Currency</h4>

        <form class="forms-sample" action="{{ route('update.currencies',$editData->id)}}" method="POST" enctype="multipart/form-data">
            @csrf


          <div class="form-group">
            <label for="exampleInputUsername1">File upload</label>
            <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Currency Name" name="img">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Currency Name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Name" name="currency_name" value="{{ $editData->currency_name }}">
          </div>


          <button type="submit" class="btn btn-primary mr-2">Update</button>

        </form>
      </div>
    </div>
  </div>

@endsection

