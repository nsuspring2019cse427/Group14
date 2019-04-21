@extends('layouts.backend_master')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Forms</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> All Forms</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>File</th>
            {{--<th>Action</th>--}}
          </tr>
          </thead>
          <tbody>
          @foreach($forms as $form)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $form->title }}</td>
              <td><a href="{{ url('storage/'.$form->file) }}">{{$form->file}}</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /tables-->
@endsection
