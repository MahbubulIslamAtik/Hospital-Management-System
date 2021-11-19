@extends("layout.app")

@section('title')
  Create Medicine
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Medicine</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Medicine</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('medicines')}}" class="btn btn-success">Manage Medicine</a>
    </div>
    <form class="form-horizontal ml-5 mr-5" action="{{ route('medicines.store') }}" method="post" >
      @csrf
        <div class="form-group row mt-3">
          <label for="cmbPatient" class="col-sm-2 col-form-label">Patient Name</label>
          <div class="col-sm-10 ">
            <select name="cmbPatient" id="cmbPatient" class="col-6 p-1">
              @foreach($appointments as $appointment)
              <option value="{{$appointment->id}}" >{{$appointment->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="cmbDoctor" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10 ">
            <select name="cmbDoctor" id="cmbDoctor" class="col-6 p-1">
              @foreach($doctorlists as $doctorlist)
              <option value="{{$doctorlist->id}}" >{{$doctorlist->doctor_name}}</option>
              @endforeach
              </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="cmbMedicine" class="col-sm-2 col-form-label">Medicine</label>
          <div class="col-sm-10 ">
            <select name="cmbMedicine" id="cmbMedicine" class="col-6 p-1">
              @foreach($pmedicines as $pmedicine)
              <option value="{{$pmedicine->id}}" >{{$pmedicine->medicine}}</option>
              @endforeach
              </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtAmount" class="col-sm-2 col-form-label">Amount</label>
          <div class="col-5">
            <input type="test" class="form-control" name="txtAmount" id="txtAmount" placeholder="Enter Your Amount">
          </div>
        </div>      
      </div>
      <div class="card-footer">
        <button type="reset" class="btn btn-default float-left">Clear</button>
        <button type="submit" class="btn btn-info ml-5 float-right">Save</button>
      </div>
    </form>
  </div>
</section>
@endsection