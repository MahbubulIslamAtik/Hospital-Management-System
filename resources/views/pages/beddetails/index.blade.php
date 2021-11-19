@extends('layout.app')

@section('title') Manage Room Details @endsection

 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Room Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Room Details</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/beds/create')}}">Create Room</a>

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
                    Room Number
                </th>
                <th>
                    Code
                </th>
                <th>
                    Type
                </th>
                <th>
                  Price
                </th>
                <th>
                  Action
                </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($roomdetials as $roomdetial)
              <tr>
                  <td>{{ $roomdetial->id }}</td>
                  <td>{{ $roomdetial->room_no }}</td>
                  <td>{{ $roomdetial->code }}</td>
                  <td>{{ $roomdetial->type }}</td>
                  <td>{{ $roomdetial->price }}</td>
                  
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="{{ url('/beds/'.$roomdetial->id) }}">
                          <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/beds/'.$roomdetial->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('beds.destroy', $roomdetial->id) }}" method="POST" class="delete">
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