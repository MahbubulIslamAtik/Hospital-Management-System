@extends("layout.app")

@section('title')
  Create Patient Test
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Test</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Test</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('testpatients')}}" class="btn btn-success">Manage Test</a>
    </div>
    <form class="form-horizontal ml-5 mr-5" action="{{ route('testpatients.store') }}" method="post" >
      @csrf

      <div class="form-group row mt-3">
        <label for="cmbAdmission" class="col-sm-2 col-form-label">Admission Date</label>
        <div class="col-sm-10 ">
          <select name="cmbAdmission" id="cmbAdmission" class="col-6 p-1">
            @foreach($admissions as $admission)
            <option value="{{$admission->id}}" >{{$admission->admission}}</option>
            @endforeach
          </select>
        </div>
      </div>

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
          <label for="cmbTestname" class="col-sm-2 col-form-label">Doctor Name</label>
          <div class="col-sm-10 ">
            <select name="cmbTestname" id="cmbTestname" class="col-6 p-1">
              @foreach($testnames as $testname)
              <option value="{{$testname->id}}" >{{$testname->test_name}}</option>
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