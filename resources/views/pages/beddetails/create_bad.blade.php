@extends("layout.app")

@section('title')
  Create Doctor
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Appointment</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Appointment</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('beds')}}" class="btn btn-success">Manage Room</a>
    </div>
    <form class="form-horizontal" action="{{ route('beds.store') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtRoom" class="col-sm-2 col-form-label">Room Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtRoom" id="txtRoom" placeholder="Enter Your Full Name">
          </div>
        </div>

        <div class="form-group row">
          <label for="txtCode" class="col-sm-2 col-form-label">Code</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtCode" id="txtCode" placeholder="Enter Your Email Address">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtType" class="col-sm-2 col-form-label">Type</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtType" id="txtType" placeholder="Enter Your Phone Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtPrice" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtPrice" id="txtPrice" placeholder="Enter Your Phone Number">
          </div>
        </div>
        
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
        <button type="reset" class="btn btn-default float-right">Clear</button>
        <button type="submit" class="btn btn-info">Save</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</section>
@endsection