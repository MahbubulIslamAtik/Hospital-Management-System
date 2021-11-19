@extends("layout.app")

@section('title')
  Create Prescription
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Prescription</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Prescription</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('prescriptions')}}" class="btn btn-success">Manage Prescription</a>
    </div>
    <form class="form-horizontal" action="{{ route('prescriptions.update', $prescriptions->id) }}" method="post">
      @method("PUT");
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="cmbPatient" class="col-sm-2 col-form-label">Patient Name</label>
          <div class="col-sm-10 ">
            <select name="cmbPatient" id="cmbPatient" class="col-6 p-1">
              @foreach($prescripts as $prescript)
              <option value="{{$prescript->id}}" >{{$prescript->name}}</option>
              @endforeach
              </select>
          </div>
        </div>
       
        <div class="form-group row">
          <label for="txtDate" class="col-sm-2 col-form-label">Prescription Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" value="{{$prescriptions->prescription_date}}" name="txtDate" id="txtDate" placeholder="Enter Your Email Address">
          </div>
        </div>
        <div class="form-group row">
          <label for="cmbDoctor" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10 ">
            <select name="cmbDoctor" id="cmbDoctor" class="col-6 p-1">
              @foreach($doctors as $doctor)
              <option value="{{$doctor->id}}" >{{$doctor->doctor_name}}</option>
              @endforeach
              </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtAdmission" class="col-sm-2 col-form-label">Admission Needed</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$prescriptions->admission_needed}}" name="txtAdmission" id="txtAdmission" placeholder="Enter Your Phone Number">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtDoctorfee" class="col-sm-2 col-form-label">Doctor Fee</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$prescriptions->fee}}" name="txtDoctorfee" id="txtDoctorfee" placeholder="Enter Your Phone Number">
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