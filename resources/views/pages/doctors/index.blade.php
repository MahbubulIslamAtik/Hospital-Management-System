@extends('layout.app')

@section('title') Manage Doctor @endsection

 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Doctor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Doctor</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/doctors/create')}}">Create Doctor</a>

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
          <table class="table table-striped projects text-center table-hover inline-block">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Doctor Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone
                </th>
                <th>
                  Position
                </th>
                <th>
                  Spetielist
                </th>
                <th>
                  Gender
                </th>
                <th>
                  Created At
                </th>
                <th>
                  Action
                </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($doctors as $doctor)
              <tr>
                  <td>{{ $doctor->id }}</td>
                  <td>{{ $doctor->doctor_name }}</td>
                  <td>{{ $doctor-> email}}</td>
                  <td>{{ $doctor->phone }}</td>
                  <td>{{ $doctor->position }}</td>
                  <td>{{ $doctor->spetielists }}</td>
                  <td>{{ $doctor->gender }}</td>
                  <td>{{ $doctor->created_at }}</td>
                  
                  <td class="project-actions text-right">
                    
                      <a class="btn btn-primary btn-sm" href="{{ url('/doctors/'.$doctor->id) }}">
                          <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/doctors/'.$doctor->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="delete">
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