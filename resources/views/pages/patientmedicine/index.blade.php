@extends('layout.app')

@section('title') Manage Test @endsection

 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Medicine</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Medicine</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/medicines/create')}}">Create Medicine</a>

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
                <th>
                    ID
                </th>
                <th>
                  Patient Name
                </th>
                <th>
                    Doctor Name
                </th>
                <th>
                  Medicine
                </th>
                <th>
                  Amount
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
            @foreach ($medicines as $medicine)
              <tr>
                  <td>{{ $medicine->id }}</td>
                  <td>{{ $medicine->name }}</td>
                  <td>{{ $medicine->doctor_name }}</td>
                  <td>{{ $medicine->medicine }}</td>
                  <td>{{ $medicine->medicine_price }}</td>
                  <td>{{ $medicine->created_at }}</td>
                  
                  <td class="project-actions text-right">
                    
                      <a class="btn btn-primary btn-sm" href="{{ url('/medicines/'.$medicine->id) }}">
                          <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/medicines/'.$medicine->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" class="delete">
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