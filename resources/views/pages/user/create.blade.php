@extends("layout.app")

@section('title')
  Create User
@endsection
@section('page')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <a href="{{url('users')}}" class="btn btn-success">Manage User</a>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('users.store') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="txtRole" class="col-sm-2 col-form-label">Role</label>
          <div class="col-sm-10 ">
            <select name="cmbRole" id="cmbRole">
              @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
              @endforeach
              </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="txtUsername" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Enter Your Full Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Enter Your Course Name">
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
        
        <button type="reset" class="btn btn-default float-right">Clear</button>
        <button type="submit" class="btn btn-info">Save</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</section>
@endsection