@extends("layout.app")

@section('title')
  Create Patient Visit
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Visit</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Visit</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('patientvisits')}}" class="btn btn-success">Manage Visit</a>
    </div>
    <form class="form-horizontal ml-5 mr-5" action="{{ route('patientvisits.store') }}" method="post" >
      @csrf
        <div class="form-group row mt-3">
          <label for="cmbPatient" class="col-sm-2 col-form-label">Patient Name</label>
          <div class="col-sm-10 ">
            <select name="cmbPatient" id="cmbPatient" class="col-6 p-1">
              @foreach($patientnames as $patientname)
              <option value="{{$patientname->id}}" >{{$patientname->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="cmbDoctor" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10 ">
            <select name="cmbDoctor" id="cmbDoctor" class="col-6 p-1">
              @foreach($doctornames as $doctorname)
              <option value="{{$doctorname->id}}" >{{$doctorname->doctor_name}}</option>
              @endforeach
              </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="txtDate" class="col-sm-2 col-form-label">Visit Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="txtDate" id="txtDate" placeholder="Enter Your Email Address">
          </div>
        </div>

        <div class="form-group row">
          <label for="txtVisitprice" class="col-sm-2 col-form-label">Visit Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtVisitprice" id="txtVisitprice" placeholder="Enter Your Phone Number">
          </div>
        </div>        
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
        <button type="reset" class="btn btn-default float-left">Clear</button>
        <button type="submit" class="btn btn-info ml-5 float-right">Save</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</section>
@endsection