@extends("layout.app")

@section('title')
  Create Test
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
      <a href="{{url('tests')}}" class="btn btn-success">Manage Test</a>
    </div>
    <form class="form-horizontal" action="{{ route('tests.store') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtTestName" class="col-sm-2 col-form-label">Test Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtTestName" id="txtTestName" placeholder="Enter Your Full Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtRate" class="col-sm-2 col-form-label">Test Rate</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtRate" id="txtRate" placeholder="Enter Your Email Address">
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