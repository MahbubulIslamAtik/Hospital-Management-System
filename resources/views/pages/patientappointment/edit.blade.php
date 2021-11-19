@extends("layout.app")

@section('title')
  Create Doctor
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Appointment</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Appointment</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('appointments')}}" class="btn btn-success">Manage Appointment</a>
    </div>
    <form class="form-horizontal" action="{{ route('appointments.update', $appointments->id) }}" method="post">
      @method("PUT")
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtName" class="col-sm-2 col-form-label">Patient Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $appointments->name }}" name="txtName" id="txtName" placeholder="Enter Your Full Name">
          </div>
        </div>

        <div class="form-group row">
          <label for="txtAge" class="col-sm-2 col-form-label">Patient Age</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $appointments->age }}" name="txtAge" id="txtAge" placeholder="Enter Your Email Address">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="txtGender">Gender</label>
          <div class="col-sm-10 mt-2 ">
            <span><input type="radio" name="txtGender" class="" id="txtGender" value="Male">Male</span>
            <span><input type="radio" name="txtGender" class="ml-5" id="txtGender" value="Female">Female</span>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtProblem" class="col-sm-2 col-form-label">Problem</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $appointments->problem }}" name="txtProblem" id="txtProblem" placeholder="Enter Your Phone Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtRole" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10 ">
            <select name="cmbDoctor" id="cmbDoctor" class="col-6 p-1">
              @foreach($doctors as $doctor)
              <option value="{{$doctor->id}}" >{{$doctor->doctor_name}}</option>
              @endforeach
              </select>
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