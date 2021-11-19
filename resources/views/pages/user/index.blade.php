@extends('layout.app')

@section('title') Manage Student @endsection
 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Student</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage User</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/users/create')}}">Create User</a>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <thead>
          <table class="table table-striped projects text-center table-hover">
            <tr>
                <th style="width: 10%">
                    ID
                </th>
                <th style="width: 30%">
                    Username
                </th>
                <th>
                    Password
                </th>
                <th style="width: 30%" class="text-center">
                    Role ID
                </th>
                <th style="width: calc(100% - 70%)">
                  Action
                </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($users as $user)
              <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user-> password}}</td>
                  <td>{{ $user->name }}</td>
                  
                  <td class="project-actions text-right">
                    
                      <a class="btn btn-primary btn-sm" href="{{ url('/users/'.$user->id) }}">
                          <i class="fas fa-eye">
                          </i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/users/'.$user->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="delete">
                            @csrf
                            @method('DELETE')
                          </form>
                      </a>
                  </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection