@extends("layout.app")

@section('title')
  Create Prescription
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Prescription</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Prescription</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('prescriptiondetails')}}" class="btn btn-success">Manage Prescription</a>
    </div>
    <form class="form-horizontal" action="{{ route('prescriptiondetails.store') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtMedicine" class="col-sm-2 col-form-label">Medicine</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtMedicine" id="txtMedicine" placeholder="Enter Your Email Address">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtDose" class="col-sm-2 col-form-label">Dose</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtDose" id="txtDose" placeholder="Enter Dose Details">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtComments" class="col-sm-2 col-form-label">Comments</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtComments" id="txtComments" placeholder="Enter Your Comments Details">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtStatus" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtStatus" id="txtStatus" placeholder="Enter Your Status Details">
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