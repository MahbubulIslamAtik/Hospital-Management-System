@extends("layout.app")

@section('title')
  Create Doctor
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Doctor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Doctor</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('doctors')}}" class="btn btn-success">Manage User</a>
    </div>
    <form class="form-horizontal" action="{{ route('doctors.update', $doctors->id) }}" method="post">
      @method('PUT')
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtDoctor" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $doctors->doctor_name }}" name="txtDoctor" id="txtDoctor" placeholder="Enter Your Full Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" value="{{ $doctors->email }}" name="txtEmail" id="txtEmail" placeholder="Enter Your Email Address">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtPhone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $doctors->phone }}" name="txtPhone" id="txtPhone" placeholder="Enter Your Phone Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtPosition" class="col-sm-2 col-form-label">Position</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $doctors->position }}" name="txtPosition" id="txtPosition" placeholder="Enter Your Position">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtSpetielist" class="col-sm-2 col-form-label">Spetielist</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $doctors->spetielists }}" name="txtSpetielist" id="txtSpetielist" placeholder="Enter your Designetion">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="exampleCheck2">Gender</label>
          <div class="col-sm-10 mt-3 ">
            <span><input type="radio" name="txtGender" class="" id="txtGender" value="Male">Male</span>
            <span><input type="radio" name="txtGender" class="ml-5" id="txtGender" value="Female">Female</span>
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