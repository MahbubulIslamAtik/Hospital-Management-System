@extends('layout.app')

@section('title') Manage Test @endsection
 @section('page')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Test</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Test</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="{{url('/tests/create')}}">Create Test</a>

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
                <th>
                    #
                </th>
                <th >
                    ID
                </th>
                <th>
                    Test Name
                </th>
                <th>
                    Test Rate
                </th>
                <th>
                  Action
              </th>
            </tr>
        </thead>
        
          <tbody>
            @foreach ($tests as $test)
              <tr>
                  <td>
                      #
                  </td>
                  <td>{{ $test->id }}</td>
                  <td>{{ $test->test_name }}</td>
                  <td>{{ $test->test_rate }}</td>
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="{{ url('/tests/'.$test->id) }}">
                          <i class="fas fa-eye">
                          </i>
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ url('/tests/'.$test->id.'/edit') }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                          <i class="fas fa-trash">
                          </i>
                          <form action="{{ route('tests.destroy', $test->id) }}" method="POST" class="delete">
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