@extends("layout.app")

@section('title')
  Edit Student
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Student</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Student</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Student Edit Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('students.update', $student->id) }}" method="POST">
      @method('PUT')
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtUsername" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="hidden" name="txtId" value="{{ $student->id }}">
            <input type="text" class="form-control" name="txtUsername" id="txtUsername" value="{{ $student->username }}" placeholder="Enter Your Full Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtCourse" class="col-sm-2 col-form-label">Course</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtCourse" id="txtCourse" value="{{ $student->course }}" placeholder="Enter Your Course Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtMobile" class="col-sm-2 col-form-label">Mobile No.</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtMobile" id="txtMobile" value="{{ $student->phone }}" placeholder="Enter Your Cell Number">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck2">
              <label class="form-check-label" for="exampleCheck2">Remember me</label>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Save</button>
        <button type="reset" class="btn btn-default float-right">Clear</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</section>
@endsection