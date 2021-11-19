@extends('layout.app')

@section('title') Manage Role @endsection
 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Role</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Role</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/roles/create')}}">Create Role</a>

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
          <table class="table table-striped projects text-center">
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    ID
                </th>
                <th style="width: 50%">
                    Name
                </th>
                <th style="width: calc(71%-100%)">
                  Action
              </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($roles as $role)
              <tr>
                  <td>
                      #
                  </td>
                  <td>{{ $role->id }}</td>
                  <td>{{ $role->name }}</td>
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="{{ url('/roles/'.$role->id) }}">
                          <i class="fas fa-eye">
                          </i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/roles/'.$role->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="delete">
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
    </div>
  </section>
@endsection