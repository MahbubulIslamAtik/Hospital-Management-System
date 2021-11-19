@extends('layout.app')

@section('title')Prescription Details @endsection

 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Prescription Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Prescription Details</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/prescriptiondetails/create')}}">Add Details</a>

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
                    Medicine Name
                </th>
                <th>
                    Dose
                </th>
                <th>
                    Comments
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($prescriptdetails as $prescriptdetail)
              <tr>
                  <td>{{ $prescriptdetail->id }}</td>
                  <td>{{ $prescriptdetail->medicine }}</td>
                  <td>{{ $prescriptdetail->dose}}</td>
                  <td>{{ $prescriptdetail->comments }}</td>
                  <td>{{ $prescriptdetail->status }}</td>

                  
                  <td class="project-actions text-right">
                    
                      <a class="btn btn-primary btn-sm" href="{{ url('/prescriptiondetails/'.$prescriptdetail->id) }}">
                          <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/prescriptiondetails/'.$prescriptdetail->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('prescriptiondetails.destroy', $prescriptdetail->id) }}" method="POST" class="delete">
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
  </section>
  <!-- /.content -->
@endsection