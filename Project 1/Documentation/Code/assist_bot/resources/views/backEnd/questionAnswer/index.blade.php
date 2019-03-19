@extends('layouts.backend_master')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">QA</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> All Question & Answer</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
            <th>#</th>
            <th>Question</th>
            <th>Answer</th>
            {{--<th>Action</th>--}}
          </tr>
          </thead>
          <tbody>
          @foreach($qas as $qa)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $qa->questions }}</td>
              <td>{{ $qa->answers }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /tables-->
@endsection
